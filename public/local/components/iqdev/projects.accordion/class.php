<?

class projectsAccordion extends \CBitrixComponent
{
    /**
     * Установка заднего фона для блока.
     *
     * @return array
     */
    public function setBackgroundToItems($arResult): array
    {
        foreach ($arResult as $iKey => $aItem) {
            if ($iKey % 2 == 0) {
                $aItem['backgroundColor'] = 'accordion--sand';
            }
            $arResult[$iKey] = $aItem;
        }
        return $arResult;
    }

    /**
     * Получение полей и свойств из ИБ 'choose_cottage_village'.
     *
     * @return array|null
     */
    public function getData(): ?array
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_TEXT',
                'DETAIL_TEXT',
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
            $aCard['detailText'] = $aElement->getDetailText();

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
        $aResultData = $this->getData();
        $aResultData = $this->setBackgroundToItems($aResultData);

        $this->arResult = $aResultData;
        $this->includeComponentTemplate();
    }
}
