<?php

namespace IQDEV\Components;


class AboutVillage extends \CBitrixComponent
{

    public function getData()
    {
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElement = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_TEXT',
                'COMMUNICATION_FIRST',
                'COMMUNICATION_SECOND',
                'COMMUNICATION_THIRD',
                'COMMUNICATION_FOURTH',
                'COMMUNICATION_FIFTH',
                'PICTURE_FIRST.FILE',
                'PICTURE_SECOND.FILE',
            ],
        ])->fetchObject();

        if (empty($aElement)) {
            return null;
        }

        $arResult = [];

        $arResult['id'] = $aElement->getId();
        $arResult['title'] = $aElement->getName();
        $arResult['description'] = $aElement->getPreviewText();
        $arResult['communicationText'][] = $aElement->getCommunicationFirst()->getValue();
        $arResult['communicationText'][] = $aElement->getCommunicationSecond()->getValue();
        $arResult['communicationText'][] = $aElement->getCommunicationThird()->getValue();
        $arResult['communicationText'][] = $aElement->getCommunicationFourth()->getValue();
        $arResult['communicationText'][] = $aElement->getCommunicationFifth()->getValue();

        $iPictureFirstId = $aElement->getPictureFirst()->getFile()->getId();
        $arResult['pictureFirst'] = \CFile::GetPath($iPictureFirstId);

        $iPictureSecondId = $aElement->getPictureSecond()->getFile()->getId();
        $arResult['pictureSecond'] = \CFile::GetPath($iPictureSecondId);

        return $arResult;
    }

    public function executeComponent()
    {
        $aData = [];
        $aData = $this->getData();
        $this->arResult = $aData;

        $this->includeComponentTemplate();
    }
}