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

$aMapCards = [];

foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];

    $aCard['indexItem'] = $iKey + 1;
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = [$aItem['PREVIEW_TEXT'], $aItem['PROPERTIES']['FORM_TO_DISPLAY']['VALUE_XML_ID'] => $aItem['PROPERTIES']['FORM_TO_DISPLAY']['VALUE']];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);
    $aCard[$aItem['PROPERTIES']['FORM_TO_DISPLAY']['VALUE_XML_ID']] = $aItem['PROPERTIES']['FORM_TO_DISPLAY']['VALUE'];

    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
