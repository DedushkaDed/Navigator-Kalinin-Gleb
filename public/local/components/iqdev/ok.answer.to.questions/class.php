<?php

namespace IQDEV\Components;

class OkAnswerToQuestions extends \CBitrixComponent
{
    /**
     * Установка цвета у блока.
     * @param $aItems array
     *
     * @return array
     */
    public function setBackgroundItem(array $aItems): array
    {
        foreach ($aItems as $iKey => $aItem) {
            if ($iKey % 2 == 0) {
                $aItem['backgorundColor'] = 'accordion--sand';
            }
            $aItems[$iKey] = $aItem;
        }
        return $aItems;
    }
    /**
     * Получение свойств из ИБ 'answer_to_questions'
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
                'DETAIL_TEXT',
            ],
        ])->fetchCollection();

        foreach ($aElements as $aElement) {
            if
            (
                empty($aElement->getId())
                || empty($aElement->getName())
                || empty($aElement->getPreviewText())
                || empty($aElement->getDetailText())
            ) {
                return null;
            }

            $aCard = [];
            $aCard['id'] = $aElement->getId();
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();
            $aCard['detailText'] = $aElement->getDetailText();
            $aCard['backgorundColor'] = '';

            $arResult[] = $aCard;
        }

        return $this->setBackgroundItem($arResult);
    }
    /**
     * Проверка наличия тегированного кеша у компонента.
     * Если кеш отсутствует - создается новый.
     *
     * @return array
     */
    public function checkCache($aInputData): array
    {
        $oTaggedInstance = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $oCache = \Bitrix\Main\Data\Cache::createInstance();

        if ($oCache->initCache(8600, 'tagged_cache_key_1', 'taggedCache')) {
            return $oCache->getVars();
        } elseif ($oCache->startDataCache(8600)) {
//            Начало тегированного кеша
            $oTaggedInstance->registerTag('iblock_id_' . $this->arParams['IBLOCK_ID']);
//            Финализируем тегирование кеша
            $oTaggedInstance->endTagCache();
//             Сохраняет буферизированный PHP переменные файле кеша
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
