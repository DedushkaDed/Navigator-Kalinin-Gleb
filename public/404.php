<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
if (!defined('ERROR_404')) {
    define('ERROR_404', 'Y');
}
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

CHTTP::SetStatus('404 Not Found');

$APPLICATION->SetTitle('404 Not Found');

require($_SERVER["DOCUMENT_ROOT"].'/bitrix/footer.php');
