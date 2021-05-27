<?php

namespace IQDEV\Components;

class OkWorkStages extends \CBitrixComponent
{
    /**
     * Получение данных из ИБ 'work_stages'
     *
     * @return mixed
     */
    public function getData()
    {
        $aFilter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'ACTIVE_DATE' => 'Y',
        ];
        $aSelect = ['ID', 'NAME', 'PREVIEW_TEXT'];
        $aItems = CIBlockElement::GetList([], $aFilter, $aSelect);

        if (empty($aItems)) {
            return null;
        }

        $arResult = [];
        while ($aElement = $aItems->GetNext()) {
            $aCard = [];
            $aCard['id'] = $aElement['ID'];
            $aCard['title'] = $aElement['NAME'];
            $aCard['description'] = $aElement['PREVIEW_TEXT'];

            $aItemProperty = CIBlockElement::GetProperty($this->arParams['IBLOCK_ID'], $aCard['id']);

            if ($aPropertyElement = $aItemProperty->GetNext()) {
                $iIconValue = $aPropertyElement['VALUE'];
                $aCard['icon'] = CFile::GetPath($iIconValue);
            }

            $arResult[] = $aCard;
        }
        return $arResult;
    }

    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $this->arResult = $this->getData();
        $this->includeComponentTemplate();
    }
}
