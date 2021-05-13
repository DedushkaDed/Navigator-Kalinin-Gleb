<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$aBuyerOptions = \IQDEV\Options\Options::getPageOptions('buyer_main_page');


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

<?php if (empty($arResult['mapCards'])) {
    return;
} ?>

<section class="section mt-medium mb-large">
    <div class="container">
        <?if (!empty($aBuyerOptions['sectionHeader'])) :?>
            <h1 class="section-header"><?=$aBuyerOptions['sectionHeader']?></h1>
        <?endif;?>
        <div class="work-stage-container">
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <div class="work-stage">
                    <?if (!empty($aItem['indexItem'])) :?>
                        <div class="work-stage__index"><?=$aItem['indexItem']?></div>
                    <?endif;?>
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <? if (!empty($aItem['icon'])) :?>
                                <img src="<?=$aItem['icon']?>"/>
                            <?endif;?>
                        </div>
                        <div class="work-stage__line"></div>
                    </div>
                    <div class="work-stage__text">
                        <?if (!empty($aItem['title'])) :?>
                            <div class="work-stage__title"><?=$aItem['title']?></div>
                        <?endif;?>
                        <div class="work-stage__description">Заполните
                            <div class="js-modal-trigger" data-modal-id="callback">форму обратной связи.</div>
                            Специалист нашей компании перезвонит вам.
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
