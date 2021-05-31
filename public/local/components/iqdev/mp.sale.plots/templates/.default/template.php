<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
//
//if (empty($arResult)) {
//    return null;
//}
dump($arResult);
?>

<section class="section mb-medium">
    <div class="main-banner">
        <div class="container-large">
            <div class="main-banner__grid">
                <div class="main-banner__image-wrapper"
                     style="background-image: url(&quot;assets/image/main-banner/1.png&quot;)"
                ></div>
                <div class="main-banner__movie-wrapper">
                    <video class="main-banner__movie" muted="muted" autoplay="autoplay" loop="loop" preload="auto" poster="">
                        <source src="assets/video/main-video.webm" type="video/webm"/>
                    </video>
                </div>
                <div class="main-banner__footer">
                    <div class="container">
                        <div class="main-banner__content">
                            <h1 class="main-banner__header">Продажа земельных участков</h1>
                            <div class="main-banner__description">под ИЖС в Тюмени</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-banner__slider">
                <div class="main-banner__border-mobile"></div>
                <div class="slider-header js-slider-header glide">
                    <div class="glide__track" data-glide-el="track">
                        <?foreach ($arResult as $aItem) :?>
                            <div class="glide__slides">
                                <div class="glide__slide">
                                    <div class="slider-header__item">
                                        <div class="slide-header">
                                            <div class="slide-header__icon slide-header__icon--time">
                                                <?=$aItem['iconPath'] ?? ''?>
                                            </div>
                                            <div class="slide-header__content">
                                                <div class="slide-header__title"><?=$aItem['title'] ?? ''?></div>
                                                <div class="slide-header__description"><?=$aItem['description'] ?? ''?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>