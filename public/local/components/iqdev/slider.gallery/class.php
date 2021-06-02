<?php

class SliderGallery extends \CBitrixComponent
{
    /**
     * Получение полей свойств из ИБ 'ok_contact_slider'
     *
     * @return array|null
     */
    public function getData()
    {
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'PREVIEW_PICTURE',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        $arResult = [];
        foreach ($aElements as $aElement) {
            $aCard = [];
            $aCard['id'] = $aElement->getId();

            $iImageId = $aElement->getPreviewPicture();
            $aCard['picture'] = CFile::GetPath($iImageId);

            $arResult[] = $aCard;
        }
        return $arResult;
    }

    public function executeComponent()
    {
        $aIbData = $this->getData();

        $this->arResult = $aIbData;
        $this->includeComponentTemplate();
    }
}