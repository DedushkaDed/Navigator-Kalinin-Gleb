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

    if ($iKey % 2 != 0) {
        $aCard['typeBanner'] = 'banner--reverse';
    }
    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
