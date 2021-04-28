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
                    <a class="news-card <?= $aItem['typeNewCard'] ?>" href="<?= $aItem['link'] ?>">
                        <div class="news-card__image <?= $aItem['typeNewCardImage'] ?>">
                            <img src="<?= $aItem['image'] ?>" alt="<?= $aItem['title'] ?>"/>
                        </div>
                        <div class="news-card__content <?= $aItem['typeNewCardContent'] ?>">
                            <div class="news-card__title <?= $aItem['typeNewCardTitle'] ?>"><?= $aItem['title'] ?></div>
                            <div class="news-card__text"><?= $aItem['description'] ?></div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link"><?= $aItem['linkLabel'] ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
