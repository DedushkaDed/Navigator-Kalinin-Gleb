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

if (empty($arResult['ITEMS'])) {
    return;
} ?>

<div class="detail__item"></div>
<div class="detail__item detail__item--full-main detail__item--gallery">
    <div class="gallery js-gallery">
        <div class="gallery__container">
            <?php foreach ($arResult['ITEMS'] as $aItem) : ?>
                <div class="gallery__item">
                    <a class="gallery-item" href="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>" data-fancybox="photo_large"
                       data-options="{&quot;backFocus&quot; : false}"
                    >
                        <img class="gallery-item__image" src="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>" width="100%"/>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
        <div class="gallery__open">
            <div class="arrow-link arrow-link--bottom">
                <div class="arrow-link__border">
                    <svg viewBox="0 0 49 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M47 1.5C47 13.9264 36.9264 24 24.5 24C18.476 24 13.0049 21.6326 8.96629
                         17.7775C8.01424 16.8686 7.1418 15.8771 6.36049 14.8145C3.61938 11.0863 2 6.48226 2 1.5"
                              stroke="#6BBD45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </div>
                <svg class="arrow-link__arrow" width="15" height="19" viewBox="0 0 15 19" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711 18.2071L14.5711 11.8431C14.9616
                     11.4526 14.9616 10.8195 14.5711 10.4289C14.1805 10.0384 13.5474 10.0384 13.1569 10.4289L7.5
                      16.0858L1.84315 10.4289C1.45262 10.0384 0.819456 10.0384 0.428932 10.4289C0.0384074 10.8195
                       0.0384073 11.4526 0.428932 11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z"
                          fill="#6BBD45">
                    </path>
                </svg>
            </div>
        </div>
        <div class="gallery__slider__wrapper">
            <div class="gallery__slider__container js-gallery__slider__container">
                <div class="gallery__slider__container__track" data-glide-el="track">
                    <div class="glide__slides">
                        <? foreach ($arResult['ITEMS'] as $aItem) : ?>
                            <div class="glide__slide">
                                <a class="gallery-item" href="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>"
                                   data-fancybox="photo_mobile" data-options="{&quot;backFocus&quot; : false}">
                                    <img class="gallery-item__image" src="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>"
                                         width="100%"
                                    />
                                </a>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
