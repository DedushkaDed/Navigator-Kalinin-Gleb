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

<?php if (empty($arResult['ITEMS'])) {
    return;
} ?>
<div class="slider glide js-slider">
    <div class="slider__body">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <?php foreach ($arResult['ITEMS'] as $aItem) :
                    $iIconBlockId = ($aItem['PROPERTIES']['ICON_SVG']['IBLOCK_ID']);
                    $iIconId = ($aItem['PROPERTIES']['ICON_SVG']['ID']);
                    $iIcon = CFile::GetPath($aItem['PROPERTIES']['ICON_SVG']['VALUE']);
                    ?>
                    <div class="glide__slide">
                        <div class="card-list">
                            <div class="card-list__icon">
                                <img class="img" src="<?= $iIcon ?>"/>
                            </div>
                            <div class="card-list__title"><?= $aItem['name'] ?></div>
                            <div class="card-list__list-container"></div>
                            <div class="card-list__list-item"><?= $aItem['PREVIEW_TEXT'] ?></div>
                            <div class="card-list__list-item"><?= $aItem['DETAIL_TEXT'] ?></div>
                            <div class="card-list__list-item">
                                <?= $aItem['PROPERTIES']['DESCRIPTION_3']['VALUE'] ?>
                            </div>
                            <div class="card-list__list-item">
                                <?= $aItem['PROPERTIES']['DESCRIPTION_4']['VALUE'] ?>
                            </div>
                            <div class="card-list__list-item">
                                <?= $aItem['PROPERTIES']['DESCRIPTION_5']['VALUE'] ?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
