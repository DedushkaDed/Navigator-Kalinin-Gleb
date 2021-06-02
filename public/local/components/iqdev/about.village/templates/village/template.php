<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<section>
    <div class="village-infrastructure__container" id="infrastructure">
        <div class="village-infrastructure__title-wrapper">
            <h2 class="village-infrastructure__title">Наша развитая инфраструктура</h2>
            <span class="village-infrastructure__title-separator"></span>
            <h3 class="village-infrastructure__subtitle">
                В «Альпийской долине» есть все необходимое для комфортного проживания на природе
            </h3>
        </div>
        <div class="village-infrastructure__grid">
            <div class="village-infrastructure__row village-infrastructure__row--1">
                <div class="village-infrastructure__block village-infrastructure__block--outlined">
                    <h4 class="village-infrastructure__block-title">Все коммуникации включены в стоимость</h4>
                    <?if (!empty($arResult['communicationText'])) :?>
                        <ul class="village-infrastructure__list">
                            <?foreach ($arResult['communicationText'] as $aText) :?>
                                <li class="village-infrastructure__list-item"><?=$aText ?? ''?></li>
                            <?endforeach?>
                        </ul>
                    <?endif?>
                </div>
                <div class="village-infrastructure__block village-infrastructure__block--sand">
                    <h4 class="village-infrastructure__block-title">Природа</h4>
                    <p class="village-infrastructure__block-text">Густой смешанный лес, река Кулига, свежий воздух.</p>
                </div>
            </div>
            <div class="village-infrastructure__row village-infrastructure__row--2">
                <div class="village-infrastructure__image-container village-infrastructure__block--pic">
                    <img class="village-infrastructure__image"
                         src="<?=$arResult['pictureFirst'] ?? ''?>"
                    />
                </div>
                <div class="village-infrastructure__block village-infrastructure__block--blue">
                    <h4 class="village-infrastructure__block-title">Инфраструктура</h4>
                    <p class="village-infrastructure__block-text">Магазин, детские площадки, парк отдыха - внутри поселка.
                        <br>
                    </p>
                    <p class="village-infrastructure__block-text"
                    >Магазины, торговые центры, детский сад, школа, церковь, центр активного отдыха и многое другое – рядом с поселком
                    </p>
                </div>
            </div>
            <div class="village-infrastructure__row village-infrastructure__row--3">
                <div class="village-infrastructure__block village-infrastructure__block--presentation">
                    <img class="village-infrastructure__image"
                         src="<?=$arResult['pictureSecond'] ?? ''?>"
                    />
                    <a class="button button--primary village-infrastructure__button js-modal-trigger"
                       data-modal-id="presentation" data-village-id="AlpDol72"
                    >
                        <span>Скачать презентацию</span>
                    </a>
                </div>
                <div class="village-infrastructure__block village-infrastructure__block--sand">
                    <a class="village-infrastructure__block-big-link" href="/obsluzhivayuschaya-kompaniya/">
                        <div class="arrow-link arrow-link--right">
                            <div class="arrow-link__border">
                                <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806 6.48226 47 1.5 47"
                                        stroke="#6BBD45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </div>
                            <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431 0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457 10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z"
                                    fill="#6BBD45 "
                                ></path>
                            </svg>
                        </div>
                    </a>
                    <div class="village-infrastructure__block-content-wrapper">
                        <h4 class="village-infrastructure__block-title">Обслуживающая компания</h4>
                        <p class="village-infrastructure__block-text"
                        >У нас создана собственная обслуживающая компания, которая следит за порядком в поселках: покос травы летом, чистка дорог в зимнее время, вывоз мусора, благоустройство поселка.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>