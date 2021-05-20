<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class OkStaticText extends \CBitrixComponent {
    /**
     * Получение данных из модуля IQDEV\Options\Options
     *
     * @return array
     */
    public function getOptions(): array
    {
        $arResult['options'] =\IQDEV\Options\Options::getPageOptions('ok_page');
        return $arResult;
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $this->arResult = $this->getOptions();
        $this->includeComponentTemplate();
    }
}