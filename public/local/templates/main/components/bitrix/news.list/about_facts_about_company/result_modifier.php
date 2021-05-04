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

if (empty($arResult['ITEMS'])) {
    return;
}

$aMapCards = [];
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $card = [];
    $card['title'] = $aItem['NAME'];
    $card['description'] = $aItem['PREVIEW_TEXT'];
    $card['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $card['linkLabel'] = $aItem['DETAIL_TEXT'];
    $card['link'] = $aItem['PROPERTIES']['LINK']['VALUE'];
    $card['backgroundColor'] = $aItem['PROPERTIES']['BACKGROUND_COLOR']['VALUE_XML_ID'];
    $card['textColor'] = $aItem['PROPERTIES']['TEXT_COLOR']['VALUE_XML_ID'];

    if (!empty($card['image']) || $iKey == 4) {
        $card['size'] = '2';
    } else {
        $card['size'] = '1';
    }

    $aMapCards[] = $card;
}
$arResult['mapCards'] = $aMapCards;
