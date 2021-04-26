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

$mapCards = [];
foreach($arResult['ITEMS'] as $key => $aItem) {
    $aCard = [];
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $aCard['linkLabel'] = $aItem['DETAIL_TEXT'];
    $aCard['link'] = 'DETAIL_PAGE_URL';
    $aCard['date'] = $aItem['PROPERTIES']['DATE']['VALUE'];

    if ($key == 0 || $key == 1) {
        $aCard['typeBlock'] = "grid-news__item--half";
        $aCard['typeImage'] = "news-card__image--grid-half";
    }
    $mapCards[] = $aCard;
}
$arResult['mapCards'] = $mapCards;