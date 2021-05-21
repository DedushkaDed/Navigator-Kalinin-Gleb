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

\Bitrix\Main\Loader::includeModule('iqdev');
$aByuerMainPageOptions = IQDEV\Options\Options::getPageOptions('buyer_main_page');

if (empty($arResult)) {
    return;
}

$aMapCards = [];

foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];

    $aCard['indexItem'] = $iKey + 1;
    $aCard['title'] = $aItem['NAME'];
    $aCard['description'] = $aItem['PREVIEW_TEXT'];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);

    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
$arResult['options'] = $aByuerMainPageOptions;
