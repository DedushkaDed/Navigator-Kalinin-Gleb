<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/../bootstrap.php');

define('BX_USE_MYSQLI', true);
define('DBPersistent', false);
$DBType = 'mysql';
$DBHost = $_ENV['BX_MYSQL_HOST'];
$DBLogin = $_ENV['BX_MYSQL_USER'];
$DBPassword = $_ENV['BX_MYSQL_PASSWORD'];
$DBName = $_ENV['BX_MYSQL_DATABASE'];
$DBDebug = !!$_ENV['BX_DEBUG'];
$DBDebugToFile = false;

define('DELAY_DB_CONNECT', true);
define('CACHED_b_file', 3600);
define('CACHED_b_file_bucket_size', 10);
define('CACHED_b_lang', 3600);
define('CACHED_b_option', 3600);
define('CACHED_b_lang_domain', 3600);
define('CACHED_b_site_template', 3600);
define('CACHED_b_event', 3600);
define('CACHED_b_agent', 3660);
define('CACHED_menu', 3600);

define('BX_FILE_PERMISSIONS', 0644);
define('BX_DIR_PERMISSIONS', 0755);
@umask(~(BX_FILE_PERMISSIONS|BX_DIR_PERMISSIONS)&0777);

define('BX_DISABLE_INDEX_PAGE', true);

define('BX_UTF', true);
mb_internal_encoding('UTF-8');

if($_ENV['BX_CACHE_HOST']) {
    define('BX_CACHE_TYPE', 'memcache');
    define('BX_CACHE_SID', $_SERVER['DOCUMENT_ROOT'] . '#01');
    define('BX_MEMCACHE_HOST', $_ENV['BX_CACHE_HOST']);
    define('BX_MEMCACHE_PORT', $_ENV['BX_CACHE_PORT']);
}