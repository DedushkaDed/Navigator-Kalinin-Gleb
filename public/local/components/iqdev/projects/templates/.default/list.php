<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */

$APPLICATION->IncludeComponent(
    'iqdev:project.list',
    '.default',
    [
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "DETAIL_URL" => $arParams['SEF_URL_TEMPLATES']['DETAIL'],
    ],
    true
);
