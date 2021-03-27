<?php
/**
 * @phan-file-suppress
 */

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
$aMenu = array(
    array(
        'parent_menu' => 'global_menu_content',
        'sort' => 400,
        'text' => "Настройки options",
        'title' => "Настройки options",
        'icon' => 'icons-sprite-9',
        'page_icon' => 'icons-sprite-9',
        'url' => 'edit_options.php?lang=" . LANGUAGE_ID',
        'items_id' => 'menu_options'
    )
);
return $aMenu;
