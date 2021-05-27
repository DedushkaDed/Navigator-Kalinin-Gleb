<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult['options'])) {
    return;
}
?>
<div class="contacts-table">
    <div class="contacts-table-group">
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][0]['title']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][0]['number']?></div>
        </div>
        <div class="contacts-table-group__divider"></div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][1]['titleFirst']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][1]['numberFirst']?></div>
        </div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][1]['titleSecond']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][1]['titleSecond']?></div>
        </div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][1]['titleSecond']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][1]['titleSecond']?></div>
        </div>
        <div class="contacts-table-group__divider"></div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][2]['titleSecond']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][2]['emailFirst']?></div>
        </div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][2]['titleSecond']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][2]['emailSecond']?></div>
        </div>
        <div class="contacts-table-group__group">
            <div class="contacts-table-group__name"><?=$arResult['options']['contactTable'][2]['titleSecond']?></div>
            <div class="contacts-table-group__value"><?=$arResult['options']['contactTable'][2]['emailThird']?></div>
        </div>
</div>
<div class="contacts-table-map js-contacts-table-map js-tabs">
        <div class="contacts-table-map__navigation">
            <div class="tabs-navigation js-tabs-navigation">
                <div class="tabs-navigation__active"></div>
                <div class="tabs-navigation__item active" data-tab="offices">Офис компании Навигатор</div>
                <div class="tabs-navigation__item" data-tab="alpine">Офис в Альпийской Долине</div>
            </div>
        </div>
        <div class="tabs__contents">
            <div class="tabs__content js-tabs__content active"
                 data-tab-content="<?=$arResult['options']['dataOffices'][0]['dataTab']?>">
                <div class="contacts-table-map__note">График приема посетилелей:
                    <b><?=$arResult['options']['dataOffices'][0]['timeMin']?> с
                        <?=$arResult['options']['dataOffices'][0]['timeMax']?>
                        до<?=$arResult['options']['dataOffices'][0]['dayReception']?></b>
                </div>
            </div>
            <div class="tabs__content js-tabs__content"
                 data-tab-content="<?=$arResult['options']['dataOffices'][1]['dataTab']?>">
                <div class="contacts-table-map__note">График приема посетилелей:
                    <b><?=$arResult['options']['dataOffices'][1]['timeMin']?>
                        с<?=$arResult['options']['dataOffices'][1]['timeMax']?>
                        до<?=$arResult['options']['dataOffices'][1]['dayReception']?></b>
                </div>
            </div>
        </div>
        <div class="contacts-table-map__map" style="width: 100%; height: 100%"></div>
</div>
