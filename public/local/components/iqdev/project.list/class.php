<?

class projectList extends \CBitrixComponent
{
    /**
     * Получение данных из ИБ
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
                'NAME',
                'CODE',
                'PREVIEW_TEXT',
                'PREVIEW_PICTURE',
                'DETAIL_TEXT',
                'DETAIL_PICTURE',
                'TEXT_FIRST',
                'TEXT_SECOND',
                'TEXT_THIRD',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        $arResult = [];
        foreach ($aElements as $aElement) {

            $aCard = [];

            $aCard['id'] = $aElement->getId();
            $aCard['code'] = $aElement->getCode().'/';
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();
            $iLogoId = $aElement->getPreviewPicture();
            $aCard['logo'] = CFile::GetPath($iLogoId);
            $iImageId = $aElement->getDetailPicture();
            $aCard['image'] = CFile::GetPath($iImageId);
            $aCard['iconLabelFirst'] = $aElement->getTextFirst()->getValue();
            $aCard['iconLabelSecond'] = $aElement->getTextSecond()->getValue();
            $aCard['iconLabelThird'] = $aElement->getTextThird()->getValue();

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
        $aData = $this->getData();
        $this->arResult = $aData;

        $this->includeComponentTemplate();
    }
}
