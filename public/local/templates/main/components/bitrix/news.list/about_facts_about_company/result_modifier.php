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

if (empty($arResult['ITEMS'])) {
    return;
}

$aMapCards = [];
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $aCard['linkLabel'] = $aItem['DETAIL_TEXT'];
    $aCard['link'] = $aItem['PROPERTIES']['LINK']['VALUE'];
    $aCard['backgroundColor'] = $aItem['PROPERTIES']['BACKGROUND_COLOR']['VALUE_XML_ID'];
    $aCard['textColor'] = $aItem['PROPERTIES']['TEXT_COLOR']['VALUE_XML_ID'];

    if (!empty($aCard['image']) || $iKey == 4) {
        $aCard['size'] = 2;
    } else {
        $aCard['size'] = 1;
    }
    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
