<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

Bitrix\Main\Loader::includeModule('iqdev');

$APPLICATION->IncludeComponent(
    'iqdev:pricesPlots.accordion',
    'what.to.pay.attention',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('na-chto-obratit-vnimanie'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N'
    ]
);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
