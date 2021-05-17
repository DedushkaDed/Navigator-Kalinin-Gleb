<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class OkContacts extends CBitrixComponent {
    public function getData()
    {
        $aFilter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'ACTIVE_DATE' => 'Y',
        ];
        $aSelect = ['ID','NAME'];
        $aItems = CIBlockElement::GetList([], $aFilter, $aSelect);

        if (empty($aItems)) {
            return null;
        }

        $arResult = [];
        while ($aElement = $aItems->GetNext())
        {
            $aCard = [];
            $aCard['id'] = $aElement['ID'];
            $aCard['title'] = $aElement['NAME'];

// FIXME: Не могу вытянуть мои созданные свойства.
//            $aItemProperty = CIBlockElement::GetProperty($this->arParams['IBLOCK_ID'], $aCard['id']);
//            if ($aPropertyElement = $aItemProperty->GetNext()) {
//                $aCard['phoneFirst'] = $aPropertyElement['VALUE'];
//            }

            $arResult[] = $aCard;
        }
        return $arResult;
    }
    public function executeComponent()
    {
        $this->arResult = $this->getData();
        $this->includeComponentTemplate();
    }
}