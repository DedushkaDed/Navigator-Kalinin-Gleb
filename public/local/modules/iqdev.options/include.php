<?php
/**
 * @phan-file-suppress PhanUnreferencedUseNormal
 */
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;

Loader::registerAutoLoadClasses('iqdev.options', array(
    // no thanks, bitrix, we better will use psr-4 than your class names convention
    'iqdev\options\Options' => '/lib/Options.php',
));

//EventManager::getInstance()->addEventHandler('main', 'OnAfterUserAdd', function(){
//    // do something when new user added
//});

