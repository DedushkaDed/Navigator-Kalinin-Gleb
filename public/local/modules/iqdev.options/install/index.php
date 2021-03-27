<?php
/**
 * @phan-file-suppress PhanUnusedPublicMethodParameter, PhanUnreferencedUseNormal
 */
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\IO\File;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use iqdev\options\Options;

Loc::loadMessages(__FILE__);

if (class_exists('iqdev_options')) {
    return;
}

class iqdev_options extends CModule
{
    /** @var string */
    public $MODULE_ID;

    /** @var string */
    public $MODULE_VERSION;

    /** @var string */
    public $MODULE_VERSION_DATE;

    /** @var string */
    public $MODULE_NAME;

    /** @var string */
    public $MODULE_DESCRIPTION;

    /** @var string */
    public $MODULE_GROUP_RIGHTS;

    /** @var string */
    public $PARTNER_NAME;

    /** @var string */
    public $PARTNER_URI;

    public function __construct()
    {
        $this->MODULE_ID = 'iqdev.options';
        $this->MODULE_VERSION = '0.0.1';
        $this->MODULE_VERSION_DATE = '2019-06-13 13:43:14';
        $this->MODULE_NAME = Loc::getMessage('MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'N';
        $this->PARTNER_NAME = "IQ Dev";
        $this->PARTNER_URI = "https://iqdev.digital";
    }

    public function doInstall()
    {
        $this->InstallFiles();
        ModuleManager::registerModule($this->MODULE_ID);
        RegisterModuleDependences("main", "OnBeforeProlog", $this->MODULE_ID);
    }

    public function doUninstall()
    {
        $this->UnInstallFiles();
        ModuleManager::unregisterModule($this->MODULE_ID);
    }

    public function installDB()
    { }

    public function uninstallDB()
    { }

    function InstallFiles($arParams = array())
    {
        CopyDirFiles(
            __DIR__ . "/copy_file",
            Application::getDocumentRoot() . "/bitrix/admin/",
            true,
            true
        );

        return false;
    }

    function UnInstallFiles()
    {
        File::deleteFile(Application::getDocumentRoot() . "/bitrix/admin/edit_options.php");

        return false;
    }
}
