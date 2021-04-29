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

<?php if (empty($arResult['mapCards'])) {
    return;
} ?>

<section class="section mb-large">
    <div class="container">
        <div class="grid-news grid-news--top">
            <?php foreach ($arResult['mapCards'] as $aItem) : ?>
                <div class="grid-news__item <?= $aItem['typeBlock'] ?>">
                    <a class="news-card" href="<?= $aItem['link'] ?>">
                        <div class="news-card__image <?= $aItem['typeImage'] ?>">
                            <img src="<?= $aItem['image'] ?>" alt="<?= $aItem['title'] ?>"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title"><?= $aItem['title'] ?></div>
                            <div class="news-card__text"><?= $aItem['description'] ?></div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link"><?= $aItem['linkLabel'] ?></div>
                                <span class="news-card__date"><?= $aItem['date'] ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
        <?=$arResult['NAV_STRING']?>
    </div>
</section>
