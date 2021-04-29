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

foreach ($arResult['ITEMS'] as $key => $aItem) {
    if ($key == 0 ) {
        $arResult['ITEMS'][$key]['PROPERTIES']['isActive'] = 'accordion--active';
    }
    if ($key % 2 == 1) {
        $arResult['ITEMS'][$key]['PROPERTIES']['accordionColor'] = 'accordion--sand';
    }
}
