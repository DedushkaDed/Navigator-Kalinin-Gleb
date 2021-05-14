<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class OkNewsList extends \CBitrixComponent {
//   Fixme: Затирает элементы и возвращает только последний элемент.
    public function getData()
    {
        $aFilter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'ACTIVE_DATE' => 'Y',
        ];
        $aSelect = ['ID', 'NAME', 'PREVIEW_TEXT'];

        $aItems = CIBlockElement::GetList([], $aFilter, $aSelect);
        if (!empty($aItems))
        {
            $arResult = [];
            while ($aElement = $aItems->GetNext()) {
                $arResult['id'] = $aElement['ID'];
                $arResult['title'] = $aElement['NAME'];
                $arResult['description'] = $aElement['PREVIEW_TEXT'];
            }
            $aItemProperty = CIBlockElement::GetProperty($this->arParams['IBLOCK_ID'],$arResult['id']);
            if ($aPropertyElement = $aItemProperty->GetNext())
            {
                $iIconId = $aPropertyElement['ID'];
                $arResult['icon'] = CFile::GetPath($iIconId);
            }
            return $arResult;
        }
        return null;
    }
    public function executeComponent()
    {
        $this->arResult = $this->getData();
        $this->includeComponentTemplate();
    }
}