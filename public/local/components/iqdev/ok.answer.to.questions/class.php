<?php

namespace IQDEV\Components;

class OkAnswerToQuestions extends \CBitrixComponent
{
    /**
     * Установка цвета у блока.
     *
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
     * @return array
     */
    public function getData()
    {
        $arResult = [];
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
            $aCard = [];

            $aCard['id'] = $aElement->getId();
            $aCard['title'] = $aElement->getName();
            $aCard['description'] = $aElement->getPreviewText();
            $aCard['detailText'] = $aElement->getDetailText();

            $arResult[] = $aCard;
        }
        return $this->setBackgroundItem($arResult);
    }
    /**
     * Проверка наличия тегированного кеша у компонента.
     *
     * @param $aInputData
     *
     * @return array
     */
    public function checkCache($aInputData): array
    {
        $oTaggedInstance = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $oCache = \Bitrix\Main\Data\Cache::createInstance();

        if ($oCache->initCache(8600, 'answerToQuestions', 'taggedCache')) {
            $aInputData = $oCache->getVars();
        } elseif ($oCache->startDataCache()) {
            $oTaggedInstance->registerTag('answerToQuestionsTag'); // Начало тегированного кеша
            $oTaggedInstance->endTagCache(); // Финализируем тегированный кеш
            $oCache->endDataCache($aInputData); // записываем в кеш
        }
        return $aInputData;
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $aInputData = $this->getData();
        $aInputData = $this->checkCache($aInputData);

        $this->arResult = $aInputData;
        $this->includeComponentTemplate();
    }
}
