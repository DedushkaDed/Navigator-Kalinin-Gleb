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

if (empty($arResult['mapCards'])) {
    return;
}
?>
<section class="section section--overflow-hidden mb-medium">
    <div class="container">
        <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <div class="grid-layout__item grid-layout__item--lg-span-column-<?=$aItem['itemSize'] ?? ''?>">
                    <div class="grid-card <?=$aItem['itemBackgroundColor'] ?? ''?>">
                        <?if (!empty($aItem['icon'])) :?>
                            <div class="grid-card__content grid-card__content--flex">
                                <div class="grid-card__grow">
                                    <div class="grid-card__title grid-card__title--small">
                                        <?=$aItem['itemTitle'] ?? ''?>
                                    </div>
                                    <div class="grid-card__subtext"><?=$aItem['itemText'] ?? ''?></div>
                                </div>
                                <div class="grid-card__image-footer">
                                    <img class="img" src="<?=$aItem['icon']?>"/>
                                </div>
                            </div>
                        <?else :?>
                            <div class="grid-card__content">
                                <div class="grid-card__title grid-card__title--small">
                                    <?=$aItem['itemTitle'] ?? ''?>
                                </div>
                                <?if ($aItem['itemButtonLabel'] ?? '') :?>
                                    <div class="mt-medium">
                                        <a class="button button--primary button--auto-width" href="#">
                                            <span><?=$aItem['itemButtonLabel'] ?? ''?></span>
                                        </a>
                                    </div>
                                <?endif;?>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
