<?

class pricesPlotsSpecialOffer extends \CBitrixComponent {
    /**
     * Получение данных из модуля IQDEV\Options\Options
     *
     * @return array
     */
    public function getOptions(): array
    {
        return \IQDEV\Options\Options::getPageOptions('special-offer');
    }
    public function executeComponent()
    {
        $aParamsData = $this->getOptions();
        $this->arParams = $aParamsData;

        $this->includeComponentTemplate();
    }
}
