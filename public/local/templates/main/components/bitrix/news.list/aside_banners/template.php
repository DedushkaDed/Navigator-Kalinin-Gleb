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
<div class="detail__item">
    <div class="detail-aside-banners">
        <?foreach ($arResult['mapCards'] as $aItem) :?>
            <div class="detail-aside-banners__item">
                <?if (!empty($aItem['link'])) :?>
                    <a class="banner <?= $aItem['typeBanner']?>" href="<?= $aItem['link']?>">
                        <div class="banner__photo-wrapper">
                            <?if (!empty($aItem['image'])) :?>
                                <img class="banner__photo" src="<?= $aItem['image']?>"/>
                            <?endif;?>
                        </div>
                        <div class="banner__content">
                            <?if (!empty($aItem['title'])) :?>
                                <h2 class="banner__title"><?= $aItem['title']?></h2>
                            <?endif;?>
                            <?if (!empty($aItem['description'])) :?>
                                <span class="banner__text"><?= $aItem['description']?></span>
                            <?endif;?>
                            <div class="banner__button button button--outlined" href="<?= $aItem['link']?>">
                                <?if (!empty($aItem['linkLabel'])) :?>
                                    <span><?= $aItem['linkLabel']?>
                                <?endif;?>
                            </div>
                        </div>
                    </a>
                <?endif;?>
            </div>
        <?endforeach;?>
    </div>
</div>
