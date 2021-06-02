<?

class projectDetail extends \CBitrixComponent {

    /**
     * Получение данных для верхнего блока
     *
     * @return array|null
     */
    public function getHeaderData(): ?array
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $sElementCode = $this->arParams['ELEMENT_CODE'];


        $aElement = $iBlock->getEntityDataClass()::getList([
            'filter' => ['=CODE' => $sElementCode],
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_PICTURE',
                'SUBTITLE',
                'ADVANTAGE_FIRST',
                'ADVANTAGE_SECOND',
                'ADVANTAGE_THIRD',
                'VILLAGE_IMAGES.FILE',
            ],
        ])->fetchObject();

        if (empty($aElement)) {
            return  null;
        }

        $arResult = [];
        $arResult['id'] = $aElement->getId();
        $arResult['title'] = $aElement->getName();

        $iLogoId = $aElement->getPreviewPicture();
        $arResult['logo'] = CFile::GetPath($iLogoId);

        $arResult['subtitle'] = $aElement->getSubtitle()->getValue();
        $arResult['advantages'][] = $aElement->getAdvantageFirst()->getValue();
        $arResult['advantages'][] = $aElement->getAdvantageSecond()->getValue();
        $arResult['advantages'][] = $aElement->getAdvantageThird()->getValue();

        $aSlidePhotos = $aElement->getVillageImages()->getAll();
        foreach ($aSlidePhotos as $aPhoto) {
            $iPictureId = $aPhoto->getFile()->getId();
            $arResult['slideImages'][] = \CFile::GetPath($iPictureId);
        }
        return $arResult;
    }
    /**
     * Получение данных для блока 'villageAbout'
     *
     * @return array|null
     */
    public function getVillageAboutData(): ?array
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $sElementCode = $this->arParams['ELEMENT_CODE'];

        $aElement = $iBlock->getEntityDataClass()::getList([
            'filter' => ['=CODE' => $sElementCode],
            'select' => [
                'ID',
                'TEXT_FIRST',
                'TEXT_SECOND',
                'TEXT_THIRD',
                'VILLAGE_DESC_TOP',
                'VILLAGE_DESC_BOTTOM',
                'VILLAGE_DESC_BOTTOM_SECOND',
            ],
        ])->fetchObject();

        if (empty($aElement)) {
            return null;
        }

        $arResult = [];

        $arResult['id'] = $aElement->getId();
        $arResult['iconLabelFirst'] = $aElement->getTextFirst()->getValue();
        $arResult['iconLabelSecond'] = $aElement->getTextSecond()->getValue();
        $arResult['iconLabelThird'] = $aElement->getTextThird()->getValue();
        $arResult['textTop'] = $aElement->getVillageDescTop()->getValue();
        $arResult['textBottom'] = $aElement->getVillageDescBottom()->getValue();

        $aTextBottom = unserialize($aElement->getVillageDescBottomSecond()->getValue());
        $arResult['textBottomSecond'] = $aTextBottom['TEXT'];

        return $arResult;
    }
    public function executeComponent()
    {
        $aData = [];
        $aData['sectionHeader'] = $this->getHeaderData();
        $aData['villageAbout'] = $this->getVillageAboutData();
        $this->arResult = $aData;

        $this->includeComponentTemplate();
    }
}
