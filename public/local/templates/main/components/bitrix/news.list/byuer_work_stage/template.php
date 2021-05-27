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
<section class="section mt-medium mb-large">
    <div class="container">
        <h1 class="section-header"><?=$arResult['options']['sectionHeader'] ?? ''?></h1>
        <div class="work-stage-container">
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <div class="work-stage">
                    <div class="work-stage__index"><?=$aItem['indexItem'] ?? ''?></div>
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="<?=$aItem['icon'] ?? ''?>"/>
                        </div>
                        <div class="work-stage__line"></div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title"><?=$aItem['title'] ?? ''?></div>
                        <div class="work-stage__description">
                            <?=$aItem['description'] ?? ''?>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
