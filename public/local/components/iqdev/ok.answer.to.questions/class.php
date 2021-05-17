<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class OkAnswerToQuestions extends \CBitrixComponent {
    public function getData()
    {
        $aFilter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'ACTIVE_DATE' => 'Y',
        ];
        $aSelect = ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT'];
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
            $aCard['description'] = $aElement['PREVIEW_TEXT'];
            $aCard['detail_text'] = $aElement['DETAIL_TEXT'];
            $aCard['backgorundColor'] = '';

            $arResult[] = $aCard;
        }
        return $this->setBackgroundItem($arResult);
    }
    public function setBackgroundItem($aItems) {
        foreach ($aItems as $iKey => $aItem) {
            if ($iKey % 2 == 0) {
                $aItem['backgorundColor'] = 'accordion--sand';
            }
            $aItems[$iKey] = $aItem;
        }
        return $aItems;
    }
    public function executeComponent()
    {
        $this->arResult = $this->getData();
        $this->includeComponentTemplate();
    }
}
