<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
\Bitrix\Main\Loader::includeModule('iqdev');
$aAboutOptions = \IQDEV\Options\Options::getPageOptions('about_page');
?>



<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');

?>