<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

if (empty($arResult['ITEMS'])) {
    return;
}

$mapCards = [];

foreach ($arResult['ITEMS'] as $key => $aItem) {
    $card = [];
    $card['title'] = $aItem['NAME'];
    $card['description'] = $aItem['PREVIEW_TEXT'];
    $card['image'] = $aItem['PREVIEW_PICTURE']['SRC'];
    $card['linkLabel'] = $aItem['DETAIL_TEXT'];

    $iElementId = intval($aItem['ID']);
    $iIblockId = intval($aItem['IBLOCK_ID']);

    $res = CIBlockElement::GetProperty($iIblockId, $iElementId);
    if ($ob = $res->GetNext()) {
        $aValues = $ob['VALUE'];
        $card['link'] = $aValues;
    }
    if (!empty($card['image'])) {
        $card['type'] = 'a';
        $card['size'] = '2';
    } else {
        // type = div
        // size = 1
    }
    $mapCards[] = $card;
}

?>
<pre>
    <?var_dump($mapCards);?>
</pre>

<!--Подмена данных из массива -->
<?php //foreach ($mapCards as $card): ?>
<?php //var_dump($card);?>
<?php //endforeach;?>

<?php //foreach($mapCards as $card):?>
<!--    $type = $card['type'];-->
<!--    <$type class="grid-card" href="#"><img class="grid-card__image" src="http://placehold.it/1920x800"><div class="grid-card__arrow-link"><div>Собственная обслуживающая компания</div><div class="grid-card__arrow-link-link"><div class="arrow-link arrow-link--right"><div class="arrow-link__border"><svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806 6.48226 47 1.5 47" stroke="#6BBD45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431 0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457 10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z" fill="#6BBD45 "></path></svg></div></div></div></$type>-->
<?//endforeach;?>

