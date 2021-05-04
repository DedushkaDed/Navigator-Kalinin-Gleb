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
    if ($iKey % 2 == 0) {
        $arResult['ITEMS'][$iKey]['PROPERTIES']['contentPosition'] = 'vacancy-description-gallery__slider--right';
    } else {
        $arResult['ITEMS'][$iKey]['PROPERTIES']['contentPosition'] = 'vacancy-description-gallery__slider--left';
    }
}
