<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class OkStaticText extends \CBitrixComponent {
    public function getOptions() {
        $arResult['options'] =\IQDEV\Options\Options::getPageOptions('ok_page');
        return $arResult;
    }
    public function executeComponent()
    {
        $this->arResult = $this->getOptions();
        $this->includeComponentTemplate();
    }
}