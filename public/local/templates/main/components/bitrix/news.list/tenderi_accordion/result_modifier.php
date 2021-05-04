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

foreach ($arResult['ITEMS'] as $iKey => $aItem) {
    if ($iKey == 0) {
        $arResult['ITEMS'][$iKey]['PROPERTIES']['isActive'] = 'accordion--active';
    }
    if ($iKey % 2 == 1) {
        $arResult['ITEMS'][$iKey]['PROPERTIES']['accordionColor'] = 'accordion--sand';
    }
}
