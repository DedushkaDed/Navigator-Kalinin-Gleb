<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'iqdev:projects',
    '.default',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('plats_project'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);
?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
