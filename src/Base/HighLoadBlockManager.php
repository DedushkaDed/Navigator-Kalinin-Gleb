<?php

namespace IQDEV\Base;

use Bitrix\Main\Data\Cache;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock\HighloadBlockTable;

/**
 * Class HighLoadBlockManager
 * @package IQDEV\Base
 *
 * Менеджер для HighLoadBlock
 */
class HighLoadBlockManager
{
    /** @var \Bitrix\Main\Entity\Base[] массив скомпилированных сущностей*/
    protected static $aEntities = [];

    /** @var bool флаг инциализации*/
    protected static $isInit = false;

    /**
     * Вернет DataManager для HighLoadBlocks
     *
     * @param string $code символьный код hl
     *
     * @return \Bitrix\Main\ORM\Data\DataManager|string
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getDataManager($code)
    {
        static::init();
        if (!static::$aEntities[$code]) {
            static::compile($code);
        }

        return static::$aEntities[$code]->getDataClass();
    }

    /**
     * Инициализация HL
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function init()
    {
        if (static::$isInit) {
            return;
        }
        Loader::includeModule('highloadblock');
    }

    /**
     * Скомпилирует сущность HL
     *
     * @param $code
     * @throws \Bitrix\Main\SystemException
     */
    private static function compile($code)
    {
        $aHlBlock = static::getHlBlock($code);

        if (!$aHlBlock) {
            throw new \Exception('HighLoadBlock `' . $code . '` not found');
        }

        static::$aEntities[$code] = HighloadBlockTable::compileEntity($aHlBlock);
    }

    /**
     * Вернет HL по коду
     *
     * @param string $code
     * @return array|null
     */
    private static function getHlBlock($code)
    {
        $aHlBlock = null;
        $cache = Cache::createInstance();
        if ($cache->initCache(86400, __CLASS__ . __METHOD__ . $code, '/')) {
            $aHlBlock = $cache->getVars();
        } elseif ($cache->startdataCache()) {
            $oHlBlock = HighloadBlockTable::getList(
                [
                    'filter' =>
                        [
                            'TABLE_NAME' => $code
                        ]
                ]
            );

            $aHlBlock = $oHlBlock->fetch();
            if ($aHlBlock) {
                $cache->endDataCache($aHlBlock);
            } else {
                $cache->abortDataCache();
            }
        }

        return $aHlBlock;
    }
}
