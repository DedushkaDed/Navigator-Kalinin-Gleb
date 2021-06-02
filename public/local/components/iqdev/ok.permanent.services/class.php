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
        }
        return $arResult;
    }

    /**
     * Проверка на существование кеша.
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

        if ($oCache->initCache(7200, 'random-key')) {
            $aInputData = $oCache->getVars(); // достаем переменные из кеша
        } elseif ($oCache->startDataCache()) {
            $oCache->endDataCache($aInputData); // записываем в кеш
        }
        return $aInputData;
    }

    /**
     * Установка цвета элемента.
     *
     * @param $aInputData
     *
     * @return array|null
     */
    public function setBackgroundColor($aInputData): ?array
    {
        if (empty($aInputData)) {
            return null;
        }
        foreach ($aInputData as $iKey => $aItem) {
            if ($iKey % 2 == 0) {
                $aItem['backgorundColor'] = 'cards-color__card--green';
            } else {
                $aItem['backgorundColor'] = 'cards-color__card--blue';
            }
            $aInputData[$iKey] = $aItem;
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
        $aExecuteData = $this->setBackgroundColor($aExecuteData);
        $aExecuteData = $this->checkCache($aExecuteData);

        $this->arResult = $aExecuteData;
        $this->includeComponentTemplate();
    }
}
