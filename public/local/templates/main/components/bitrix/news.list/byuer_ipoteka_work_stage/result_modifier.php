<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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

$aMapCards = [];
foreach ($arResult['ITEMS'] as $aItem) {
    $aCard = [];

    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);


    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
