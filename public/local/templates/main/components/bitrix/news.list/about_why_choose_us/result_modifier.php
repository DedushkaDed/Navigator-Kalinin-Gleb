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
    $sIconPath = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);

    $arResult['ITEMS'][$iKey]['PROPERTIES']['ICON_SVG']['PATH'] = $sIconPath;
}
