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
dump($arResult['ITEMS']);
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $aCard['linkLabel'] = $aItem['DETAIL_TEXT'];
    $aCard['link'] = $aItem['CODE'];
    $aCard['date'] = $aItem['PROPERTIES']['DATE']['VALUE'];

    if ($iKey == 0 || $iKey == 1) {
        $aCard['typeBlock'] = "grid-news__item--half";
        $aCard['typeImage'] = "news-card__image--grid-half";
    }
    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
