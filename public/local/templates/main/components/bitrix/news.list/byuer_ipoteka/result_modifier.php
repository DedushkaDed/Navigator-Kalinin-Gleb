<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}


/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

\Bitrix\Main\Loader::includeModule('iqdev');
$iIblockMortgageWorkStage = IQDEV\Base\Helper::getIblockId('mortgage_work_stage');
$aByuerIpotekaOptions = IQDEV\Options\Options::getPageOptions('buyer_ipoteka');


$arResult['mortgageCards'] = $aByuerIpotekaOptions;
$arResult['mortgageCards']['iBlockID'] = $iIblockMortgageWorkStage;
