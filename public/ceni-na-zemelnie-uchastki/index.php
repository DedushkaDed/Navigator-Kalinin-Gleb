<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'iqdev:pricesPlots.staticText',
    'sectionTop',
    []
);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
