<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

if (empty($arResult)) {
    return;
}

$aPrepItems = [];
foreach ($arResult as $aItem) {
    if ($aItem['DEPTH_LEVEL'] <= 1) {
        $aPrepItems[] = $aItem;
    } else {
        $aPrepItems[array_key_last($aPrepItems)]['subitems'][] = $aItem;
    }
}
$arResult = $aPrepItems;
