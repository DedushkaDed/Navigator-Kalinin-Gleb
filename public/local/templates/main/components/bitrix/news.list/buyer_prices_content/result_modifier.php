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



if (empty($arResult)) {
    return;
}

$aMapCards = [];
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];

    if ($iKey == 2 || $iKey == 3) {
        $aCard['itemSize'] = 2;
    } else {
        $aCard['itemSize'] = 1;
    }

    $aCard['itemTitle'] = $aItem['NAME'];
    $aCard['itemBackgroundColor'] = $aItem['PROPERTIES']['BACKGROUND_COLOR']['VALUE_XML_ID'];
    $aCard['itemText'] = $aItem['PROPERTIES']['ADDITIONAL_TEXT']['VALUE'];
    $aCard['itemButtonLabel'] = $aItem['PROPERTIES']['BUTTON_TEXT']['VALUE'];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);

    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
