<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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

    if ($iKey == 0) {
        $aCard['activeItem'] = 'active';
    }

    $aCard['bankTitle'] = $aItem['NAME'];
    $aCard['calcTitle'] = $aItem['PREVIEW_TEXT'];
    $aCard['bankCode'] = $aItem['CODE'];
    $aCard['initialPaymentText'] = $aItem['PROPERTIES']['INITIAL_PAYMENT_TEXT']['VALUE'];
    $aCard['interestRate'] = $aItem['PROPERTIES']['INTEREST_RATE']['VALUE'];
    $aCard['initialPaymentText'] = $aItem['PROPERTIES']['INITIAL_PAYMENT_TEXT']['VALUE'];
    $aCard['date'] = $aItem['PROPERTIES']['DATE']['VALUE'];
    $aCard['sum'] = $aItem['PROPERTIES']['SUM']['VALUE'];
    $aCard['additionalTerms'] = $aItem['PROPERTIES']['ADDITIONAL_TERMS']['VALUE'];
    $aCard['price'] = $aItem['PROPERTIES']['PRICE']['VALUE'];
    $aCard['sumMaximum'] = $aItem['PROPERTIES']['SUM_MAX']['VALUE'];
    $aCard['creditRate'] = $aItem['PROPERTIES']['CREDIT_RATE']['VALUE'];
    $aCard['buttonLabel'] = $aItem['PROPERTIES']['BUTTON_TEXT']['VALUE'];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);

    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;