<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php

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
foreach ($arResult as $arItem) {
    if ($arItem['DEPTH_LEVEL'] <= 1) {
        $aPrepItems[] = $arItem;
    } else {
        $aPrepItems[array_key_last($aPrepItems)]['subitems'][] = $arItem;
    }
}
$arResult = $aPrepItems;
