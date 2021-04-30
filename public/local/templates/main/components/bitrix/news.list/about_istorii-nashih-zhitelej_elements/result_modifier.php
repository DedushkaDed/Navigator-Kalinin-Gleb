<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

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

$aMapCards = [];
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $aCard['linkLabel'] = $aItem['DETAIL_TEXT'];
    $aCard['link'] = $aItem['ID'];

    if ($iKey == 0) {
        $aCard['typeBlock'] = "grid-news__item--full";
        $aCard['typeNewCard'] = "news-card--lg-column";
        $aCard['typeNewCardImage'] = "news-card__image--lg-column";
        $aCard['typeNewCardContent'] = "news-card__content--xl-content";
        $aCard['typeNewCardTitle'] = "news-card__title--lg-large";
    }
    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
