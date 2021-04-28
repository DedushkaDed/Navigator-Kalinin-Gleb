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


<div class="tabs js-tabs">
    <div class="tabs__inner tabs__inner--offset">
        <div class="tabs-navigation js-tabs-navigation">
            <div class="tabs-navigation__active"></div>
            <div class="tabs-navigation__item active" data-tab="news">Новости</div>
            <div class="tabs-navigation__item" data-tab="stories">Истории жителей</div>
            <div class="tabs-navigation__item" data-tab="articles">Полезные статьи</div>
        </div>
    </div>
    <div class="tabs__contents">
        <div class="tabs__content js-tabs__content active" data-tab-content="news">
            <div class="slider glide js-slider">
                <div class="slider__body">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">

                            <?php foreach ($arResult['ITEMS'] as $aItem) : ?>
                                <div class="glide__slide">
                                    <a class="news-card" href="<?= $aItem['PROPERTIES']['LINK']['VALUE'] ?>">
                                        <div class="news-card__image">
                                            <img src="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>"
                                                 alt="<?= $aItem['NAME'] ?>>"
                                            />
                                        </div>
                                        <div class="news-card__content">
                                            <div class="news-card__title"><?= $aItem['NAME'] ?></div>
                                            <div class="news-card__text">
                                                <?= $aItem['PREVIEW_TEXT'] ?>
                                            </div>
                                            <div class="news-card__wrapper">
                                                <div class="news-card__link"><?= $aItem['DETAIL_TEXT'] ?></div>
                                                <span class="news-card__date">
                                                    <?= $aItem['PROPERTIES']['DATE']['VALUE'] ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="slider__arrows">
                    <div class="slider-controls">
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                     13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924
                                      22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924
                                       2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611
                                        10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                          fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <li class="glide__bullet" data-glide-dir="=0">0</li>
                            <li class="glide__bullet" data-glide-dir="=1">1</li>
                            <li class="glide__bullet" data-glide-dir="=2">2</li>
                            <li class="glide__bullet" data-glide-dir="=3">3</li>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                     1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761
                                      2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761
                                       22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607
                                        13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                          fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content js-tabs__content" data-tab-content="stories">
            <div class="slider glide js-slider">
                <div class="slider__body">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <a class="news-card" href="#">
                                    <div class="news-card__image">
                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"
                                             alt="Андрей"
                                        />
                                    </div>
                                    <div class="news-card__content">
                                        <div class="news-card__title">Андрей</div>
                                        <div class="news-card__text">
                                            Вот и наступила Масленичная неделя — праздник, справедливо считающийся
                                            одним из самых «кулинарных» праздников
                                        </div>
                                        <div class="news-card__wrapper">
                                            <div class="news-card__link">Читать далее</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="glide__slide">
                                <a class="news-card" href="#">
                                    <div class="news-card__image">
                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"
                                             alt="Андрей"
                                        />
                                    </div>
                                    <div class="news-card__content">
                                        <div class="news-card__title">Андрей</div>
                                        <div class="news-card__text">Вот и наступила Масленичная неделя — праздник,
                                            справедливо считающийся одним из самых «кулинарных» праздников
                                        </div>
                                        <div class="news-card__wrapper">
                                            <div class="news-card__link">Читать далее</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="glide__slide">
                                <a class="news-card" href="#">
                                    <div class="news-card__image">
                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"
                                             alt="Андрей"
                                        />
                                    </div>
                                    <div class="news-card__content">
                                        <div class="news-card__title">Андрей</div>
                                        <div class="news-card__text">Вот и наступила Масленичная неделя — праздник,
                                            справедливо считающийся одним из самых «кулинарных» праздников
                                        </div>
                                        <div class="news-card__wrapper">
                                            <div class="news-card__link">Читать далее</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__arrows">
                    <div class="slider-controls">
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                     13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924
                                      22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924
                                       2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611
                                        10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                          fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <li class="glide__bullet" data-glide-dir="=0">0</li>
                            <li class="glide__bullet" data-glide-dir="=1">1</li>
                            <li class="glide__bullet" data-glide-dir="=2">2</li>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                     1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761
                                      2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208
                                       9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607
                                        13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                          fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content js-tabs__content" data-tab-content="articles">
            <div class="slider glide js-slider">
                <div class="slider__body">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <a class="news-card" href="#">
                                    <div class="news-card__image">
                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                             alt="Итоги зимнего праздника в «Альпийской долине»"
                                        />
                                    </div>
                                    <div class="news-card__content">
                                        <div class="news-card__title">
                                            Итоги зимнего праздника в «Альпийской долине»</div>
                                        <div class="news-card__text">Вот и наступила Масленичная неделя — праздник,
                                            справедливо считающийся одним из самых «кулинарных» праздников
                                        </div>
                                        <div class="news-card__wrapper">
                                            <div class="news-card__link">Читать далее</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="glide__slide">
                                <a class="news-card" href="#">
                                    <div class="news-card__image">
                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                             alt="Итоги зимнего праздника в «Альпийской долине»"
                                        />
                                    </div>
                                    <div class="news-card__content">
                                        <div class="news-card__title">
                                            Итоги зимнего праздника в «Альпийской долине»</div>
                                        <div class="news-card__text">Вот и наступила Масленичная неделя — праздник,
                                            справедливо считающийся одним из самых «кулинарных» праздников
                                        </div>
                                        <div class="news-card__wrapper">
                                            <div class="news-card__link">Читать далее</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__arrows">
                    <div class="slider-controls">
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                     13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924
                                      22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924
                                       2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611
                                        10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                          fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <li class="glide__bullet" data-glide-dir="=0">0</li>
                            <li class="glide__bullet" data-glide-dir="=1">1</li>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                     1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761
                                      2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761
                                       22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607
                                        13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                          fill="#D1D1D1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
