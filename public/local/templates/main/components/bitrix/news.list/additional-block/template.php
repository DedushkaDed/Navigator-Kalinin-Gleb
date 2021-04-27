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


<?php foreach ($arResult['ITEMS'] as $aItem): ?>
    <h3><?= $aItem['NAME'] ?></h3>
    <div class="detail-content__image">
        <img class="img" src="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>"/>
    </div>
    <p><?= $aItem['PREVIEW_TEXT'] ?></p>
    <ul>
        <?php foreach ($aItem['PROPERTIES']['TEXT_PLUSES']['VALUE'] as $aText): ?>
            <li><?= $aText ?></li>
        <? endforeach; ?>
    </ul>
<? endforeach; ?>
