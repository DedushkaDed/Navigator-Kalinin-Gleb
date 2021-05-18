<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\Loader::includeModule('iblock');

class OkContacts extends CBitrixComponent {
    /**
     * Получение свойств из ИБ 'ok_contact_slider'
     *
     * @return array
     */
    public function getData()
    {
        $iBlockID = $this->arParams['IBLOCK_ID'];

        $iBlock = \Bitrix\Iblock\Iblock::wakeUp($iBlockID);

        $aElements = $iBlock->getEntityDataClass()::getList([
            'select' => [
                'ID', 'NAME', 'PHONE_FIRST', 'PHONE_SECOND', 'PHONE_THIRD', 'MAIL_FIRST', 'MAIL_SECOND', 'PERSON_POSITION', 'IMAGE']
        ])->fetchCollection();

        foreach ($aElements as $aElement) {
//            Исправить: Если какое-либо свойство, будет пустым -> Сайт упадёт.
            $aCard = [];
            $aCard['id'] = $aElement->getId();
            $aCard['name'] = $aElement->getName();
            $aCard['phones'][] = $aElement->getPhoneFirst()->getValue();
            $aCard['phones'][] = $aElement->getPhoneSecond()->getValue();
            $aCard['phones'][] = $aElement->getPhoneThird()->getValue();
            $aCard['emails'][] = $aElement->getMailFirst()->getValue();
            $aCard['emails'][] = $aElement->getMailSecond()->getValue();
            $aCard['personPosition'] = $aElement->getPersonPosition()->getValue();
            $iImageID = $aElement->getImage()->getValue();
            $aCard['image'] = CFile::GetPath($iImageID);

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