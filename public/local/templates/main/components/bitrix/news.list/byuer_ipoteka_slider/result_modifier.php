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
    $aCard['initialPaymentLabel'] = $aItem['PROPERTIES']['INITIAL_PAYMENT_TEXT']['NAME'];
    $aCard['initialPaymentValue'] = $aItem['PROPERTIES']['INITIAL_PAYMENT_TEXT']['VALUE'];
    $aCard['interestRateLabel'] = $aItem['PROPERTIES']['INTEREST_RATE']['NAME'];
    $aCard['interestRateValue'] = $aItem['PROPERTIES']['INTEREST_RATE']['VALUE'];
    $aCard['initialPaymentText'] = $aItem['PROPERTIES']['INITIAL_PAYMENT_TEXT']['VALUE'];
    $aCard['dateLabel'] = $aItem['PROPERTIES']['DATE']['NAME'];
    $aCard['dateValue'] = $aItem['PROPERTIES']['DATE']['VALUE'];
    $aCard['sumLabel'] = $aItem['PROPERTIES']['SUM']['NAME'];
    $aCard['sumValue'] = $aItem['PROPERTIES']['SUM']['VALUE'];
    $aCard['additionalTermsLabel'] = $aItem['PROPERTIES']['ADDITIONAL_TERMS']['NAME'];
    $aCard['additionalTermsValue'] = $aItem['PROPERTIES']['ADDITIONAL_TERMS']['VALUE'];
    $aCard['price'] = $aItem['PROPERTIES']['PRICE']['VALUE'];
    $aCard['sumMaximumLabel'] = $aItem['PROPERTIES']['SUM_MAX']['NAME'];
    $aCard['sumMaximumValue'] = $aItem['PROPERTIES']['SUM_MAX']['VALUE'];
    $aCard['creditRateLabel'] = $aItem['PROPERTIES']['CREDIT_RATE']['NAME'];
    $aCard['creditRateValue'] = $aItem['PROPERTIES']['CREDIT_RATE']['VALUE'];
    $aCard['buttonLabel'] = $aItem['PROPERTIES']['BUTTON_TEXT']['VALUE'];
    $aCard['icon'] = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);

    $aMapCards[] = $aCard;
}
$arResult['mapCards'] = $aMapCards;
