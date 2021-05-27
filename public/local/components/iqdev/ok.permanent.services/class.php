<?php

namespace IQDEV\Components;


class OkPermanentServices extends \CBitrixComponent
{
    /**
     * Получение полей и свойств из ИБ 'permanent_services_content'.
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
                'PREVIEW_TEXT',
                'ICON_SVG.FILE',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        $arResult = [];

        foreach ($aElements as $aElement) {
            $aCard = [];

            $aCard['id'] = $aElement->getId();
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();

            $iIconID = $aElement->getIconSvg()->getFile()->getId();
            $aCard['icon'] = \CFile::GetPath($iIconID);

            $arResult[] = $aCard;
            var_dump(time());
        }
        return $arResult;
    }

    /**
     * Проверка на существование кеша.
     *
     * @param $aInputData
     *
     * @return array
     */
    public function checkCache($aInputData): array
    {
        $oCache = \Bitrix\Main\Data\Cache::createInstance();

//        if ($oCache->initCache(8600, "cache_key_2")) {
//            return $oCache->getVars();
//        } elseif ($oCache->startDataCache(8600)) {
//            // Сохраняет буферизированный PHP переменные в файле кеша
//            $oCache->endDataCache($aInputData);
//            return $aInputData;
//        } else {
//            return $aInputData;
//        }

        if ($oCache->initCache(8600, "uniq_chache_key")) {
            $aResult = $oCache->getVars();
        }
        elseif ($oCache->startDataCache()) {
            // записываем в кеш
            $oCache->endDataCache($aInputData);
        }
        return $aResult;

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
