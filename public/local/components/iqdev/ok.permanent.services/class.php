<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class OkNewsList extends \CBitrixComponent
{
    /**
     * Получение полей и свойств из ИБ 'permanent_services_content'.
     *
     * @return mixed
     */
    public function getData()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_TEXT',
                'ICON_SVG',
            ],
        ])->fetchCollection();

        if (empty($aElements)) {
            return null;
        }

        foreach ($aElements as $aElement) {
            if
            (
                empty($aElement->getId())
                || empty($aElement->getName())
                || empty($aElement->getPreviewText())
                || empty($aElement->getIconSvg()->getValue())
            ) {
                return null;
            }

            $aCard = [];
            $aCard['id'] = $aElement->getId();
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();

            $iIconID = $aElement->getIconSvg()->getValue();
            $aCard['icon'] = CFile::GetPath($iIconID);

            $arResult[] = $aCard;
        }
        return $arResult;
    }
    /**
     * Проверка на существование кеша.
     * Если кеш существует - подгружаем его.
     * Иначе создаём новый.
     *
     * @return array
     */
    public function checkCache($aInputData): array
    {
        $oCache = Bitrix\Main\Data\Cache::createInstance();

        if ($oCache->initCache(8600, "cache_key_2")) {
            return $oCache->getVars();
        } elseif ($oCache->startDataCache(8600)) {
//            Сохраняет буферизированный PHP переменные в файле кеша
            $oCache->endDataCache($aInputData);
            return $aInputData;
        } else {
            return $aInputData;
        }
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $aInputData = $this->getData();
        $this->arResult = $this->checkCache($aInputData);
        $this->includeComponentTemplate();
    }
}
