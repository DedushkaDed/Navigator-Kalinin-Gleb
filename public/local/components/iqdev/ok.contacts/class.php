<?php

namespace IQDEV\Components;

class OkContacts extends \CBitrixComponent
{
    /**
     * Получение полей свойств из ИБ 'ok_contact_slider'
     *
     * @return mixed
     */
    public function getData()
    {
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PHONE_FIRST',
                'PHONE_SECOND',
                'PHONE_THIRD',
                'MAIL_FIRST',
                'MAIL_SECOND',
                'PERSON_POSITION',
                'IMAGE.FILE',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        $arResult = [];
        foreach ($aElements as $aElement) {
            $aCard = [];
            $aCard['id'] = $aElement->getId();
            $aCard['name'] = $aElement->getName();
            $aCard['phones'][] = $aElement->getPhoneFirst()->getValue();
            $aCard['phones'][] = $aElement->getPhoneSecond()->getValue();
            $aCard['phones'][] = $aElement->getPhoneThird()->getValue();
            $aCard['emails'][] = $aElement->getMailFirst()->getValue();
            $aCard['emails'][] = $aElement->getMailSecond()->getValue();
            $aCard['personPosition'] = $aElement->getPersonPosition()->getValue();

            $iImageID = $aElement->getImage()->getFile()->getId();
            $aCard['image'] = \CFile::GetPath($iImageID);

            $arResult[] = $aCard;
        }
        return $arResult;
    }

    /**
     * Проверка на существование кеша.
     * Если кеш существует - подгружаем его.
     * Иначе создаём новый.
     *
     * @param $aInputData
     *
     * @return array|null
     */
    public function checkCache($aInputData): ?array
    {
        if (empty($aInputData)) {
            return null;
        }

        $oCache = \Bitrix\Main\Data\Cache::createInstance();

        if ($oCache->initCache(7200, 'okContactsTag')) {
            $aInputData = $oCache->getVars(); // достаем переменные из кеша
        } elseif ($oCache->startDataCache()) {
            $oCache->endDataCache($aInputData); // записываем в кеш
        }
        return $aInputData;
    }

    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $aExecuteData = $this->getData();
        $aExecuteData = $this->checkCache($aExecuteData);

        $this->arResult = $aExecuteData;
        $this->includeComponentTemplate();
    }
}
