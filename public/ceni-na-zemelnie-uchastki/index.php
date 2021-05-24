<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

Bitrix\Main\Loader::includeModule('iqdev');

$APPLICATION->IncludeComponent(
    'iqdev:prciesPlots.slider',
    '.default',
    []
);
$APPLICATION->IncludeComponent(
    'iqdev:pricesPlots.accordion',
    'what.to.pay.attention',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('what_to_pay_attention_to'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N'
    ]
);
$APPLICATION->IncludeComponent(
    'iqdev:pricesPlots.specialOffers',
    'specialOffer',
    []
);
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
