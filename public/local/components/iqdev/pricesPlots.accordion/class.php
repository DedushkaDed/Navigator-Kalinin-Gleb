<?

class pricesPlotsAccordion extends \CBitrixComponent {

    public function getData(): ?array
    {
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_TEXT',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        $arResult = [];
        foreach ($aElements as $aElement) {
            if (empty($aElement->getId()) || empty($aElement->getName()) || empty($aElement->getPreviewText())) {
                return null;
            }

            $aCard = [];

            $aCard['id'] = $aElement->getId();
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();
            $aCard['backgroundColor'] = '';
            $aCard['isFirst'] = '';

            $arResult[] = $aCard;
        }
        return $arResult;
    }
    /**
     * Установка цвета блока
     *
     * @return array
     */
    public function setBackgroundColor($aData): array
    {
        foreach ($aData as $iKey => $aItem)
        {
            if ($iKey == 0) {
                $aItem['isFirst'] = true;
            }
            if ($iKey % 2 == 0) {
                $aItem['backgroundColor'] = 'accordion--sand';
            }
            $aData[$iKey] = $aItem;
        }
        return $aData;
    }

    /**
     * Получение данных из модуля 'iqdev.options'
     *
     * @return array
     */
    public function getOptions(): array
    {
        return \IQDEV\Options\Options::getPageOptions('ceni-na-zemelnie-uchastki');
    }

    /**
     * Входная точка компонента
     *
     * @return void
    */
    public function executeComponent()
    {
        $aData = $this->getData();
        $aData = $this->setBackgroundColor($aData);

        $this->arResult = $aData;

        $aParamsData = $this->getOptions();

        $this->arParams = $aParamsData;

        $this->includeComponentTemplate();
    }
}
