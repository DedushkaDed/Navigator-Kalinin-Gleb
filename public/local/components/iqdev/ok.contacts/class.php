<?php

//namespace IQDEV\Components;

class OkContacts extends \CBitrixComponent
{
    /**
     * Получение полей свойств из ИБ 'ok_contact_slider'
     *
     * @return mixed
     */
    public function getData()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
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
                'IMAGE',
            ],
        ])->fetchCollection();

        foreach ($aElements as $aElement) {
//            Если какого-либо свойства нет -> Компонент не отображается
            if
            (
                empty($aElement->getId())
                || empty($aElement->getName())
                || empty($aElement->getPhoneFirst()->getValue())
                || empty($aElement->getPhoneSecond()->getValue())
                || empty($aElement->getPhoneThird()->getValue())
                || empty($aElement->getMailFirst()->getValue())
                || empty($aElement->getMailSecond()->getValue())
                || empty($aElement->getPersonPosition()->getValue())
                || empty($aElement->getImage()->getValue())
            ) {
                return null;
            }

            $aCard = [];
            $aCard['id'] = $aElement->getId();
            $aCard['name'] = $aElement->getName();
            $aCard['phones'][] = $aElement->getPhoneFirst()->getValue();
            $aCard['phones'][] = $aElement->getPhoneSecond()->getValue();
            $aCard['phones'][] = $aElement->getPhoneThird()->getValue();
            $aCard['emails'][] = $aElement->getMailFirst()->getValue();
            $aCard['emails'][] = $aElement->getMailSecond()->getValue();
            $aCard['personPosition'] = $aElement->getPersonPosition()->getValue();
            $iImageID = $aElement->getImage()->getValue();
            $aCard['image'] = CFile::GetPath($iImageID);

            $arResult[] = $aCard;
        }
        return $arResult;
    }
    /**
     * Проверка на существование кеша.
     * Если кеш существует - подгружаем его.
     * Иначе создаём новый.
     *
     * @return array
     */
    public function checkCache($aInputData): array
    {
        $oCache = \Bitrix\Main\Data\Cache::createInstance();

        if ($oCache->initCache(8600, "cache_key_1")) {
            return $oCache->getVars();
        }
        elseif ($oCache->startDataCache(8600)) {
//            Сохраняет буферизированный PHP переменные в файле кеша
            $oCache->endDataCache($aInputData);
            return $aInputData;
        }
        else {
            return $aInputData;
        }
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent(){
        $aInputData = $this->getData();
        $this->arResult = $this->checkCache($aInputData);
        $this->includeComponentTemplate();
    }
}