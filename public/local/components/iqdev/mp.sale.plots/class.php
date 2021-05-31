<?php

namespace IQDEV\Components;

use Bitrix\Iblock\Iblock;
use Bitrix\Main\Loader;
use IQDEV\Options\Options;

class MpSalePlots extends \CBitrixComponent {

    public function getIbData(){
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_TEXT',
                'ICON_PATH'
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
            $aCard['iconPath'] = $aElement->getIconPath()->getValue();

            $arResult[] = $aCard;
        }
        return $arResult;
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $aData = $this->getIbData();
        $this->arResult = $aData;

        $this->includeComponentTemplate();
    }
}