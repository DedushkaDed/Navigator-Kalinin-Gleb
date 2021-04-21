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

$mapCards = [];
//dump($arResult['ITEMS']);
foreach ($arResult['ITEMS'] as $aItem) {
    $card = [];
    $card['title'] = $aItem['NAME'];
    $card['description'] = $aItem['PREVIEW_TEXT'];
    $card['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $card['linkLabel'] = $aItem['DETAIL_TEXT'];
    $card['link'] = $aItem['PROPERTIES']['LINK']['VALUE'];
    $card['backgroundColor'] = $aItem['PROPERTIES']['BACKGROUND_COLOR']['VALUE_XML_ID'];
    $card['textColor'] = $aItem['PROPERTIES']['TEXT_COLOR']['VALUE_XML_ID'];

    if (!empty($card['image'])) {
        $card['type'] = 'a';
        $card['size'] = '2';
    } else {
        $card['type'] = 'div';
        $card['size'] = '1';
    }
    $mapCards[] = $card;
}
$arResult['mapCards'] = $mapCards;
?>

