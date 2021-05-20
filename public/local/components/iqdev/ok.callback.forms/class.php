<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class OkCallBackForms extends \CBitrixComponent {
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
