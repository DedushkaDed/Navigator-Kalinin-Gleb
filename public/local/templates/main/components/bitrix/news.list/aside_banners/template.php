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

<div class="detail__item">
    <div class="detail-aside-banners">
        <?php foreach ($arResult['mapCards'] as $aItem): ?>
            <div class="detail-aside-banners__item">
                <a class="banner <?= $aItem['typeBanner'] ?>" href="<?= $aItem['linkLabel'] ?>">
                    <div class="banner__photo-wrapper">
                        <img class="banner__photo" src="<?= $aItem['image'] ?>"/>
                    </div>
                    <div class="banner__content">
                        <h2 class="banner__title"><?= $aItem['title'] ?></h2>
                        <span class="banner__text"
                        ><?= $aItem['description'] ?></span>
                        <div class="banner__button button button--outlined" href="#">
                            <span><?= $aItem['linkLabel'] ?>
                        </div>
                    </div>
                </a>
            </div>
        <? endforeach; ?>
        <!--            Банеры-->


        <!--        <div class="detail-aside-banners__item">-->
        <!--            <a class="banner banner--reverse" href="#">-->
        <!--                <div class="banner__photo-wrapper">-->
        <!--                    <img class="banner__photo" src="/assets/image/projects/alpiyskaya-dolina-tyumen/happy_family.jpg"/>-->
        <!--                </div>-->
        <!--                <div class="banner__content">-->
        <!--                    <h2 class="banner__title">Бонусная программа «Лояльный покупатель»</h2>-->
        <!--                    <span class="banner__text"-->
        <!--                    >при 100% оплате земельного участка в любом из наших коттеджных поселков.</span>-->
        <!--                    <div class="banner__button button button--outlined" href="#">-->
        <!--                        <span>Подробнее</span>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </a>-->
        <!--        </div>-->
        <!--        foreach-->
    </div>
</div>