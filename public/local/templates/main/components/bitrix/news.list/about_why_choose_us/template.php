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

if (empty($arResult['ITEMS'])) {
    return;
}
?>
<div class="slider glide js-slider">
    <div class="slider__body">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <?foreach ($arResult['ITEMS'] as $aItem) :?>
                    <div class="glide__slide">
                        <div class="card-list">
                            <div class="card-list__icon">
                                <?if (!empty($aItem['PROPERTIES']['ICON_SVG']['PATH'])) :?>
                                    <img class="img" src="<?=$aItem['PROPERTIES']['ICON_SVG']['PATH']?>"/>
                                <?endif;?>
                            </div>
                            <?if (!empty($aItem['NAME'])) :?>
                                <div class="card-list__title"><?= $aItem['NAME'] ?></div>
                            <?endif;?>
                            <div class="card-list__list-container"></div>
                            <?if (!empty($aItem['PREVIEW_TEXT'])) :?>
                                <div class="card-list__list-item"><?= $aItem['PREVIEW_TEXT'] ?></div>
                            <?endif;?>
                            <?if (!empty($aItem['DETAIL_TEXT'])) :?>
                                <div class="card-list__list-item"><?= $aItem['DETAIL_TEXT'] ?></div>
                            <?endif;?>
                            <?if (!empty($aItem['PROPERTIES']['DESCRIPTION_3']['VALUE'])) :?>
                                <div class="card-list__list-item">
                                    <?= $aItem['PROPERTIES']['DESCRIPTION_3']['VALUE'] ?>
                                </div>
                            <?endif;?>
                            <?if (!empty($aItem['PROPERTIES']['DESCRIPTION_4']['VALUE'])) :?>
                                <div class="card-list__list-item">
                                    <?= $aItem['PROPERTIES']['DESCRIPTION_4']['VALUE'] ?>
                                </div>
                            <?endif;?>
                            <?if (!empty($aItem['PROPERTIES']['DESCRIPTION_5']['VALUE'])) :?>
                                <div class="card-list__list-item">
                                    <?= $aItem['PROPERTIES']['DESCRIPTION_5']['VALUE'] ?>
                                </div>
                            <?endif;?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
