<?php

namespace IQDEV\Forms;

use Bitrix\Main\PhoneNumber\Parser;
use IQDEV\Base\HighLoadBlockManager;
use IQDEV\Entity\Plots;

class FormsHandler
{
    /**
     * Автоматический вызов метода после проверки капчи
     *
     * @param $method
     * @param $arguments
     *
     * @return array
     */
    public static function __callStatic($method, $arguments)
    {
        $method = $method . 'Captcha';

        $remoteIp = \Bitrix\Main\Service\GeoIp\Manager::getRealIp();

        $isIqDev = $remoteIp == '109.248.46.148'
            || $remoteIp == '188.186.184.43'
            || $remoteIp == '185.11.4.159'
            || $remoteIp == '178.72.90.215';
        if ($isIqDev || \IQDEV\Base\Recaptcha::recaptchaCheck($arguments[0]["grecaptcha"])) {
            return self::$method(...$arguments);
        }
        return [
            'status' => false,
            'message' => 'Вы уже воспользовались формой отправки',
        ];
    }


    /**
     * Добавляет элемент в инфоблок
     *
     * @param $sIblockCode
     * @param $aIblockFields
     * @param $aIblockProperties
     *
     * @return mixed
     */
    private static function addIblockElement($sIblockCode, $aIblockFields, $aIblockProperties)
    {
        $iblockId = \IQDEV\Base\Helper::getIblockId($sIblockCode);

        $oEl = new \CIBlockElement;

        $aFields = [
            'IBLOCK_ID' => $iblockId,
            'NAME' => $aIblockFields['name'],
            'CODE' => \CUtil::translit($aIblockFields['name'], 'ru') . time(),
            'PROPERTY_VALUES' => $aIblockProperties,
        ];

        return $oEl->Add($aFields);
    }

    /**
     * Добавляет данные в Highload блок
     *
     * @param $sHLBlockCode
     * @param $aProperties
     *
     * @return mixed
     */
    public static function addHlBlockElement($sHLBlockCode, $aProperties)
    {
        \Bitrix\Main\Loader::includeModule("highloadblock");

        $sHLBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['NAME' => $sHLBlockCode],
        ])->fetch();

        $sHLClassName = (\Bitrix\Highloadblock\HighloadBlockTable::compileEntity($sHLBlock))->getDataClass();

        if (!empty($aProperties)) {
            return $sHLClassName::add($aProperties);
        }
        return null;
    }

    /**
     * Отправляет портфолио на почту
     *
     * @param $aData
     *
     * @return array
     */
    public static function sendTenderPortfolioCaptcha($aData)
    {
        $arResult['status'] = false;

        $arFile = [
            "name" => $_FILES['file']['name'],
            "size" => $_FILES['file']['size'],
            "tmp_name" => $_FILES['file']['tmp_name'],
            "type" => $_FILES['file']['type'],
            "old_file" => "",
            "del" => "Y",
            "MODULE_ID" => "",
        ];

        $sExtensions = \CFile::GetImageExtensions();

        $sExtensions .= ',pdf,doc,docx,ppt,pptx,svg,xml';

        $sErrorMsg = \CFile::CheckFile($arFile, 8388608, false, $sExtensions);

        if (!$sErrorMsg) {
            $fid = \CFile::SaveFile($arFile, 'portfolio');

            $sFileSrc = SITE_SERVER_NAME . \CFile::GetPath($fid);
        } else {
            $arResult['message'] = $sErrorMsg;
            return $arResult;
        }

        if (\Bitrix\Main\Loader::includeModule('iblock')) {
            $elementIterator = \Bitrix\Iblock\ElementTable::getList([
                'select' => [
                    'NAME',
                ],
                'filter' => [
                    '=IBLOCK_ID' => \IQDEV\Base\Helper::getIblockId('tenderi'),
                    '=ID' => $aData['id'],
                ],
            ]);

            $sElementName = $elementIterator->fetch()['NAME'];
        }

        $aFields = [
            'NAME' => $aData['name'],
            'PHONE' => $aData['phone'],
            'PORTFOLIO' => $sFileSrc,
            'TENDER' => $sElementName,
            'FILE' => $fid,
        ];

        self::addIblockElement('TenderPortfolio', $aData, $aFields);

        $iMessage = \Bitrix\Main\Mail\Event::send(
            [
                "EVENT_NAME" => "SEND_PORTFOLIO",
                "LID" => "s1",
                "C_FIELDS" => $aFields,
            ]
        );

        if ($iMessage) {
            $arResult['status'] = true;

            $arResult['id'] = $iMessage;
        }

        return $arResult;
    }

    /**
     * Сохраняет имя и номер телефона пользователя в форме 'Появились вопросы'.
     *
     * @param $sName
     * @param $sPhone
     *
     * @return mixed
     */
    public static function setFeedbackInputCaptcha($sName, $sPhone)
    {
        $oParsedPhone = Parser::getInstance()->parse($sPhone);

        if (!isset($sName) || $oParsedPhone->isValid() === false) {
            return null;
        }

        $aFields = [
            'name' => $sName,
        ];
        $aProperties = [
            'PHONE' => $oParsedPhone->format('RU'),
        ];

        return self::addIblockElement('questions', $aFields, $aProperties);
    }

    /**
     * Сохраняет имя и номер телефона пользователя в форме 'Экскурсия по загородной жизни'.
     *
     * @param $sName
     * @param $sPhone
     *
     * @return mixed
     */
    public static function setExcursionInputCaptcha($sName, $sPhone)
    {
        $oParsedPhone = Parser::getInstance()->parse($sPhone);

        if (!isset($sName) || $oParsedPhone->isValid() === false) {
            return null;
        }

        $aFields = [
            'name' => $sName,
        ];
        $aProperties = [
            'PHONE' => $oParsedPhone->format('RU'),
        ];

        return self::addIblockElement('excursion_mailing', $aFields, $aProperties);
    }

    /**
     * Сохраняет E-mail пользователя, который подписался на рассылку.
     *
     * @param $sEmail
     *
     * @return mixed
     */
    public static function setEmailSubscribeInputCaptcha($sEmail)
    {
        if (!filter_var($sEmail, FILTER_VALIDATE_EMAIL)) {
            return null;
        }

        $class = HighLoadBlockManager::getDataManager('email');

        return $class::add([
            'UF_EMAIL' => $sEmail,
            'UF_DATE' => date("d.m.Y"),
        ])->isSuccess();
    }

    /**
     * Запись данных из формы 'Задайте вопрос обслуживающей компании!' в ИБ.
     *
     * @param $sName
     * @param $sPhone
     * @param $sEmail
     * @param $iAreaNumber
     * @param $sQuestion
     * @param $sVillageName
     *
     * @return mixed
     */
    public static function setFormQuestionInputCaptcha(
        $sName,
        $sPhone,
        $sEmail,
        $iAreaNumber,
        $sQuestion,
        $sVillageName
    ) {
        $oParsedPhone = Parser::getInstance()->parse($sPhone);

        if
        (
            empty($sName)
            || (!$oParsedPhone->isValid())
            || empty($sEmail)
            || empty($iAreaNumber)
            || empty($sQuestion)
            || empty($sVillageName)
        ) {
            return null;
        }

        $aFields = [
            'name' => $sName,
        ];

        $aProperties = [
            'PHONE' => $oParsedPhone->format('RU'),
            'EMAIL' => $sEmail,
            'AREA_NUMBER' => $iAreaNumber,
            'QUESTION' => $sQuestion,
            'VILLAGE_NAME' => $sVillageName,
        ];

        return self::addIblockElement('ask_question_form', $aFields, $aProperties);
    }

    /**
     * Сохраняет данные пользователя в 'Отправить резюме'.
     *
     * @param $sName
     * @param $sPhone
     * @param $oInputFile
     *
     * @return mixed
     */
    public static function setResumeInputCaptcha($sName, $sPhone, $oInputFile)
    {
        $oParsedPhone = Parser::getInstance()->parse($sPhone);

        if (!isset($sName) || $oParsedPhone->isValid() === false) {
            return null;
        }

        $aFields = [
            'name' => $sName,
        ];

        $aProperties = [
            'PHONE' => $oParsedPhone->format('RU'),
            'INPUT_FILE' => $oInputFile,
        ];

        return self::addIblockElement('resume_from_users', $aFields, $aProperties);
    }

    /**
     * Сохраняет данные пользователя в 'Отправить портфолио'.
     *
     * @param $sName
     * @param $sPhone
     * @param $aInputFile
     *
     * @return mixed
     */
    public static function setPortfolioInputCaptcha($sName, $sPhone, $aInputFile)
    {
        $oParsedPhone = Parser::getInstance()->parse($sPhone);

        if (!isset($sName) || !isset($aInputFile) || $oParsedPhone->isValid() === false) {
            return null;
        }

        $aFields = [
            'name' => $sName,
        ];

        $aProperties = [
            'PHONE' => $oParsedPhone->format('RU'),
            'INPUT_FILE' => $aInputFile,
        ];

        return self::addIblockElement('portfolio_users', $aFields, $aProperties);
    }

    /**
     * Сохраняет данные пользователя в 'Отправить портфолио'.
     *
     * @return array
     */
    public static function setAdditionalServicesInputCaptcha()
    {
        //        if (!isset($sName)) {
        //            return null;
        //        }

        //        $aFields = [
        //            'name' => $sName,
        //        ];
        //
        //        $aProperties = [
        //            'PHONE' => $oParsedPhone->format('RU'),
        //            'INPUT_FILE' => $aInputFile,
        //        ];

        //        return self::addIblockElement('portfolio_users', $aFields, $aProperties);
        return ["random" => 123];
    }

    /**
     * Данные из highload блока 'Участки'.
     *
     * @param $aInputData
     *
     */
    public static function getContentData($aInputData)
    {
        $cPlots = \IQDEV\Base\HighLoadBlockManager::getDataManager('Plots');

        $iMinCost = intval($aInputData['minCost']);
        $iMaxCost = intval($aInputData['maxCost']);
        $fMinArea = intval($aInputData['minArea']);
        $fMaxArea = intval($aInputData['maxArea']);
        $sSortType = $aInputData['sortType'];
        $iPageNumber = intval($aInputData['page']);

        if (empty($iMinCost) || empty($iMaxCost) || empty($fMinArea) || empty($fMaxArea)) {
            $iMinCost = 381290;
            $iMaxCost = 1957100;
            $fMinArea = 5.1900000000000004;
            $fMaxArea = 16.23;
            $sSortType = 'price-';
            $iPageNumber = 1;
        }

        $aSortCards = [
            'price+' => [
                'UF_PRICE' => 'ASC',
            ],
            'price-' => [
                'UF_PRICE' => 'DESC',
            ],
            'area+' => [
                'UF_SQUARE' => 'ASC',
            ],
            'area-' => [
                'UF_SQUARE' => 'DESC',
            ],
            'priceIn100+' => [
                'UF_100_PRICE' => 'ASC',
            ],
            'priceIn100-' => [
                'UF_100_PRICE' => 'DESC',
            ],
            'sale+' => [
                'UF_SALE_PRICE' => 'ASC',
            ],
            'sale-' => [
                'UF_SALE_PRICE' => 'DESC',
            ],
        ];

        $sSortFilter = null;
        $sSortLabel = null;
        if ($aSortCards[$sSortType]) {
            //            Получаем ключ: area, price, ....
            $sSortLabel = key($aSortCards[$sSortType]);
            //            Получаем значение массива: 'DESC', 'ASC'
            $sSortFilter = current($aSortCards[$sSortType]);
        }

        $aDataHL = $cPlots::getList([
            //            'filter' => [],
            'limit' => $iPageNumber * 20,
            'order' => [$sSortLabel => $sSortFilter],
            'offset' => $iPageNumber * 20,
        ])->fetchAll();

        $iCount = 0;
        $aCardItems = [];
        foreach ($aDataHL as $aItemHL) {
            $aCardItem = [];

            $iPriceIn100 = $aItemHL['UF_100_PRICE'];
            $iAreaIn100 = floatval($aItemHL['UF_SQUARE']);

            $aIbVillages = \CIBlockElement::GetByID($aItemHL['UF_PROJECT'])->GetNext();

            $sVillageName = [];
            if ($aIbVillages) {
                $sVillageName = $aIbVillages['NAME'];
            }

            $aCardItem['area'] = intval($iAreaIn100 * 100);
            $aCardItem['areaIn100'] = floatval($aItemHL['UF_SQUARE']);
            $aCardItem['description'] = 'Стоимость при 100% оплате,';
            $aCardItem['districtName'] = $sVillageName;
            $aCardItem['houseNum'] = $aItemHL['UF_NUMBER'];
            $aCardItem['id'] = intval($aItemHL['ID']);
            $aCardItem['price'] = intval($iPriceIn100 * $iAreaIn100);
            $aCardItem['priceIn100'] = intval($aItemHL['UF_100_PRICE']);
            $aCardItem['priceIn100WithSale'] = intval($aItemHL['UF_SALE_PRICE']);

            if ($aCardItem['areaIn100'] > $fMinArea
                && $aCardItem['areaIn100'] < $fMaxArea
                && $aCardItem['price'] > $iMinCost
                && $aCardItem['price'] < $iMaxCost
            ) {
                //                Запись подходящих элементов
                $aCardItems[] = $aCardItem;
                $iCount++;
            }
        }


        $aResult = [];
        //    Начальные значения
        $aInitialData = [
            'minArea' => $fMinArea,
            'maxArea' => $fMaxArea,
            'minCost' => $iMinCost,
            'maxCost' => $iMaxCost,
            'count' => $iCount,
            'fullCount' => $iCount,
        ];
        $aResult = $aInitialData;
        //    Фильтры
        $aFilters = Plots::getFilters($aInputData);
        $aResult['filters'] = $aFilters;
        //    Результат
        $aResult['results'] = $aCardItems;

        return $aResult;
    }
}
