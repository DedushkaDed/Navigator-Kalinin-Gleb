<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$iIblockPayment = IQDEV\Base\Helper::getIblockId('payment_workstage');
$aByuerRassrochkaOptions = IQDEV\Options\Options::getPageOptions('buyer_rassrochka');

$arResult['paymentCards'] = $aByuerRassrochkaOptions;
$arResult['paymentCards']['iBlockID'] = $iIblockPayment;
