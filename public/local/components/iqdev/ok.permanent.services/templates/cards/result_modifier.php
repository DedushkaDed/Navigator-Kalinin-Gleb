<?
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

foreach ($arResult as $iKey => $iItem) {
    if ($iKey % 2 == 0) {
        $arResult[$iKey]['backgorundColor'] = 'cards-color__card--green';
    } else {
        $arResult[$iKey]['backgorundColor'] = 'cards-color__card--blue';
    }
}
