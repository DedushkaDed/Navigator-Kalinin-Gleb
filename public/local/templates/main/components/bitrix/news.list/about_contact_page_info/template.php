<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<? if (empty($arResult['ITEMS'])) {
    return;
} ?>

<div class="contact-page__info">
    <? foreach ($arResult['ITEMS'] as $aItem) :?>
    <div class="contact-page-info">
        <div class="contact-page-info__image">
            <img src="<?=$aItem['PREVIEW_PICTURE']['SRC']?>"/>
        </div>
        <div class="contact-page-info__data">
            <div class="contact-page-info-data">
                <div class="contact-page-info-data__content">
                    <h2 class="contact-page-info-data__title"><?=$aItem['NAME']?></h2>
                    <div class="contact-page-info-data__subtitle"><?=$aItem['PREVIEW_TEXT']?></div>
                    <div class="contact-page-info-data__phones">
                        <div class="contact-page-info-data__phone">
                            <h5 class="contact-page-info-data__phone-title roistat_phone_navig">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_FIRST']['VALUE']?>
                            </h5>
                            <div class="contact-page-info-data__phone-description">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_FIRST_TEXT']['VALUE']?>
                            </div>
                        </div>
                        <div class="contact-page-info-data__phone">
                            <h5 class="contact-page-info-data__phone-title">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_SECOND']['VALUE']?>
                            </h5>
                            <div class="contact-page-info-data__phone-description">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_SECOND']['VALUE']?>
                            </div>
                        </div>
                        <div class="contact-page-info-data__phone">
                            <h5 class="contact-page-info-data__phone-title">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_THIRD']['VALUE']?>
                            </h5>
                            <div class="contact-page-info-data__phone-description">
                                <?=$aItem['DISPLAY_PROPERTIES']['PHONE_THIRD_TEXT']['VALUE']?>
                            </div>
                        </div>
                    </div>
                    <div class="contact-page-info-data__details">
                        <h5><?= $aItem['PROPERTIES']['REQUISITE_TEXT']['NAME']?></h5>
                        <div>
                            <?= $aItem['PROPERTIES']['REQUISITE_TEXT']['VALUE']['TEXT']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>
