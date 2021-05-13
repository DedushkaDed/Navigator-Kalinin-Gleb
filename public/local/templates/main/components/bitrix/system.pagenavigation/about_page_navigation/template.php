<?
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

if (empty($arResult)) {
    return null;
} ?>

<div class="mt-30">
    <div class="pagination">
        <? if ($arResult['nStartPage'] == $arResult['NavPageNomer']) : ?>
            <div class="pagination__button pagination__button--prev pagination__button--disabled">
                <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M0.646446 3.64645C0.451184 3.84171 0.451184 4.15829 0.646446 4.35355L3.82843
                             7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369
                              4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.97631 4.7308 0.659727 4.53553
                               0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64645ZM13
                                3.5L1 3.5L1 4.5L13 4.5L13 3.5Z"
                            fill="black">
                    </path>
                </svg>
                <span>Назад</span>
            </div>
        <? else : ?>
            <a class="pagination__button pagination__button--prev"
           href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] - 1 ?>">
                <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M0.646446 3.64645C0.451184 3.84171 0.451184 4.15829 0.646446 4.35355L3.82843
                             7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369
                              4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.97631 4.7308 0.659727 4.53553
                               0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64645ZM13
                                3.5L1 3.5L1 4.5L13 4.5L13 3.5Z"
                            fill="black">
                    </path>
                </svg>
                <span>Назад</span>
            </a>
        <? endif;?>
        <div class="pagination__label">
            Страница <?=$arResult['NavFirstRecordShow']?> из <? echo $arResult["NavRecordCount"]?></div>
        <div class="pagination__pages">
            <? while ($arResult['nStartPage'] <= $arResult['nEndPage']) :?>
                <? if ($arResult['nStartPage'] == $arResult['NavPageNomer']) :?>
                    <div class="pagination__page pagination__page--active"><?=$arResult['nStartPage']?></div>
                <? elseif (($arResult['nStartPage']) == 1) :?>
                    <a class="pagination__page" href="<?=$arResult['sUrlPath']?>"><?=$arResult['nStartPage']?></a>
                <? else :?>
                    <a class="pagination__page"
                       href="<?= $arResult["sUrlPath"] ?>?PAGEN_
                       <?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
                <? endif; ?>
                <? $arResult["nStartPage"]++ ?>
            <? endwhile;?>
        </div>
        <? if ($arResult['nEndPage'] == $arResult['NavPageNomer']) :?>
        <div class="pagination__button pagination__button--next pagination__button--disabled">
            <span>Вперед</span>
            <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M12.3536 3.64645C12.5488 3.84171 12.5488 4.15829 12.3536 4.35355L9.17157 7.53553C8.97631
                         7.7308 8.65973 7.7308 8.46447 7.53553C8.2692 7.34027 8.2692 7.02369 8.46447 6.82843L11.2929
                          4L8.46447 1.17157C8.2692 0.97631 8.2692 0.659727 8.46447 0.464465C8.65973 0.269203 8.97631
                           0.269203 9.17157 0.464465L12.3536 3.64645ZM-5.82819e-08 3.5L12 3.5L12 4.5L5.82819e-08
                            4.5L-5.82819e-08 3.5Z"
                        fill="black">
                </path>
            </svg>
        </div>
        <? else : ?>
            <a class="pagination__button pagination__button--next "
           href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] + 1 ?>">
                <span>Вперед</span>
                <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M12.3536 3.64645C12.5488 3.84171 12.5488 4.15829 12.3536 4.35355L9.17157 7.53553C8.97631
                             7.7308 8.65973 7.7308 8.46447 7.53553C8.2692 7.34027 8.2692 7.02369 8.46447
                              6.82843L11.2929 4L8.46447 1.17157C8.2692 0.97631 8.2692 0.659727 8.46447
                               0.464465C8.65973 0.269203 8.97631 0.269203 9.17157 0.464465L12.3536
                                3.64645ZM-5.82819e-08 3.5L12 3.5L12 4.5L5.82819e-08 4.5L-5.82819e-08 3.5Z"
                            fill="black">
                    </path>
                </svg>
            </a>
        <? endif;?>
    </div>
</div>
