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


$aBuyerPricesOptions = \IQDEV\Options\Options::getPageOptions('buyer_prices');

if (empty($arResult)) {
    return;
}

$aMapCards = [];
foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    $aCard = [];

    if ($iKey == 0) {
        $aCard['activeItem'] = 'accordion--active';
    }
    if ($iKey % 2 !== 0) {
        $aCard['itemBackgroundColor'] = 'accordion--sand';
    }

    $aCard['AccordionHeader'] = $aItem['NAME'];
    $aCard['AccordionHeaderPrice'] = $aItem['PROPERTIES']['PRICE']['VALUE'];
    $aCard['AccordionListFirstLabel'] = $aItem['PROPERTIES']['ACRES']['NAME'];
    $aCard['AccordionListFirstValue'] = $aItem['PROPERTIES']['ACRES']['VALUE'];
    $aCard['AccordionListSecondLabel'] = $aItem['PROPERTIES']['ACRES_MIN']['NAME'];
    $aCard['AccordionListSecondValue'] = $aItem['PROPERTIES']['ACRES_MIN']['VALUE'];
    $aCard['AccordionListSecondValue'] = $aItem['PROPERTIES']['ACRES_MIN']['VALUE'];
    $aCard['AccordionFirstIconLabel'] = $aItem['PROPERTIES']['ITEM_FIRST_TEXT']['VALUE'];
    $aCard['AccordionSecondIconLabel'] = $aItem['PROPERTIES']['ITEM_SECOND_TEXT']['VALUE'];
    $aCard['AccordionThirdIconLabel'] = $aItem['PROPERTIES']['ITEM_THIRD_TEXT']['VALUE'];
    $aCard['AccordionFirstIconPath'] = CFile::GetPath($aItem['PROPERTIES']['ICON_FIRST']['VALUE']);
    $aCard['AccordionSecondIconPath'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SECOND']['VALUE']);
    $aCard['AccordionThirdIconPath'] = CFile::GetPath($aItem['PROPERTIES']['ICON_THIRD']['VALUE']);

    $aMapCards[] = $aCard;
}

$arResult['mapCards']['items'] = $aMapCards;
$arResult['mapCards']['options'] = $aBuyerPricesOptions;
