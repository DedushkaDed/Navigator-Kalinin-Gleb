<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

?>
<section class="section mb-medium">
    <div class="container">
        <div class="tabs-navigation-wrapper">
            <div class="tabs-navigation js-tabs-navigation-static">
                <div class="tabs-navigation__active"></div>
                <a class="tabs-navigation__item tabs-navigation__item--active" href="/about/">Компания</a>
                <a class="tabs-navigation__item" href="/about/our-news/">Новости</a>
                <a class="tabs-navigation__item" href="/about/istorii-nashih-zhitelej/">Истории жителей</a>
                <a class="tabs-navigation__item" href="/blog/">Полезные статьи</a>
                <a class="tabs-navigation__item" href="/tenderi/">Тендеры</a>
                <a class="tabs-navigation__item" href="/about/rabota/">Вакансии</a>
                <a class="tabs-navigation__item" href="/about/contact/">Контакты</a>
            </div>
        </div>
    </div>
</section>
<section class="section mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <h1>Девелоперская компания «Навигатор»</h1>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">Занимается реализацией земельных участков под ИЖС. Более 8 лет успешной
                    работы на рынке загородной недвижимости города Тюмени.
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="section mb-large">
        <div class="container">
            <div class="grid-layout">
                <div class="grid-layout__item">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "dev_company_image",
                        [
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => ["", ""],
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "1",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => ["", ""],
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                        ]
                    ); ?>
                </div>
            </div>
            <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
                <div class="grid-layout__item grid-layout__item--md-span-column-1">
                    <div class="grid-card grid-card--background-green grid-card--color-white">
                        <div class="grid-card__content">
                            <div class="grid-card__title">Наша миссия</div>
                            <div class="grid-card__subtext">Мы улучшаем качество жизни, создаем пространство для комфорта детей и взрослых
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--md-span-column-3">
                    <div class="grid-card grid-card--background-sand">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--green">Наши Ценности</div>
                            <div class="slider-simple glide js-slider-simple">
                                <div class="slider-simple__body">
                                    <div class="glide__track" data-glide-el="track">
                                        <?php $APPLICATION->IncludeComponent(
                                            "bitrix:news.list",
                                            "our_values_slider",
                                            [
                                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                "ADD_SECTIONS_CHAIN" => "N",
                                                "AJAX_MODE" => "N",
                                                "AJAX_OPTION_ADDITIONAL" => "",
                                                "AJAX_OPTION_HISTORY" => "N",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "CACHE_FILTER" => "N",
                                                "CACHE_GROUPS" => "Y",
                                                "CACHE_TIME" => "36000000",
                                                "CACHE_TYPE" => "A",
                                                "CHECK_DATES" => "Y",
                                                "DETAIL_URL" => "",
                                                "DISPLAY_BOTTOM_PAGER" => "N",
                                                "DISPLAY_DATE" => "N",
                                                "DISPLAY_NAME" => "N",
                                                "DISPLAY_PICTURE" => "N",
                                                "DISPLAY_PREVIEW_TEXT" => "N",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "FIELD_CODE" => ["NAME", "PREVIEW_TEXT", "DETAIL_TEXT", ""],
                                                "FILTER_NAME" => "",
                                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                                "IBLOCK_ID" => "3",
                                                "IBLOCK_TYPE" => "content",
                                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                                "INCLUDE_SUBSECTIONS" => "N",
                                                "MESSAGE_404" => "",
                                                "NEWS_COUNT" => "10",
                                                "PAGER_BASE_LINK_ENABLE" => "N",
                                                "PAGER_DESC_NUMBERING" => "N",
                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                "PAGER_SHOW_ALL" => "N",
                                                "PAGER_SHOW_ALWAYS" => "N",
                                                "PAGER_TEMPLATE" => "",
                                                "PAGER_TITLE" => "Новости",
                                                "PARENT_SECTION" => "",
                                                "PARENT_SECTION_CODE" => "",
                                                "PREVIEW_TRUNCATE_LEN" => "",
                                                "PROPERTY_CODE" => ["", ""],
                                                "SET_BROWSER_TITLE" => "N",
                                                "SET_LAST_MODIFIED" => "N",
                                                "SET_META_DESCRIPTION" => "N",
                                                "SET_META_KEYWORDS" => "N",
                                                "SET_STATUS_404" => "N",
                                                "SET_TITLE" => "N",
                                                "SHOW_404" => "N",
                                                "SORT_BY1" => "SORT",
                                                "SORT_BY2" => "SORT",
                                                "SORT_ORDER1" => "DESC",
                                                "SORT_ORDER2" => "ASC",
                                                "STRICT_SECTION_CHECK" => "N",
                                            ]
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section mb-large">
    <div class="container">
        <div class="section-header">Факты о компании</div>
        <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-2">
                <a class="grid-card" href="#">
                    <img class="grid-card__image" src="http://placehold.it/1920x800"/>
                    <div class="grid-card__arrow-link">
                        <div>Собственная обслуживающая компания</div>
                        <div class="grid-card__arrow-link-link">
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
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-blue grid-card--color-white">
                    <div class="grid-card__content">
                        <div class="grid-card__title">4 коттеджных поселка</div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-sand">
                    <div class="grid-card__grow">
                        <div class="grid-card__content">
                            <div class="grid-card__title">1 500 участков</div>
                            <div class="grid-card__subtitle">Продано счастливым владельцам</div>
                        </div>
                    </div>
                    <a class="grid-card__button" href="#">Выбрать участок</a>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--border">
                    <div class="grid-card__content">
                        <div class="grid-card__title">1 500 Га</div>
                        <div class="grid-card__subtitle">Земли в собственности</div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-2">
                <div class="grid-card grid-card--background-primary grid-card--color-white">
                    <div class="grid-card__content">
                        <div class="grid-card__title">Более 1000 жителей</div>
                        <div class="grid-card__subtitle">Начали строить или уже построили дома</div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-sand">
                    <div class="grid-card__content">
                        <div class="grid-card__title">8 лет</div>
                        <div class="grid-card__subtitle">На рынке загородной недвижимости</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header">Почему выбирают нас?</div>
        <div class="slider glide js-slider">
            <div class="slider__body">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <div class="glide__slide">
                            <div class="card-list">
                                <div class="card-list__icon">
                                    <img class="img" src="/assets/image/icons/shield.svg"/>
                                </div>
                                <div class="card-list__title">Выгодно и надежно</div>
                                <div class="card-list__list-container"></div>
                                <div class="card-list__list-item">Развитая инфраструктура</div>
                                <div class="card-list__list-item">Безпроцентная рассрочка</div>
                                <div class="card-list__list-item">Юридическое сопровождение сделки</div>
                                <div class="card-list__list-item">Ипотека от 9.5 %</div>
                                <div class="card-list__list-item">Скидка 10% при 100% оплате</div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="card-list">
                                <div class="card-list__icon">
                                    <img class="img" src="/assets/image/icons/clean.svg"/>
                                </div>
                                <div class="card-list__title">Чистота и порядок</div>
                                <div class="card-list__list-container"></div>
                                <div class="card-list__list-item">Собственная обслуживающая компания</div>
                                <div class="card-list__list-item">Каждое лето покос травы</div>
                                <div class="card-list__list-item">Чистка дорог в зимнее время</div>
                                <div class="card-list__list-item">Благоустройства территории</div>
                                <div class="card-list__list-item">Вывоз мусора</div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="card-list">
                                <div class="card-list__icon">
                                    <img class="img" src="/assets/image/icons/lamp_and_square.svg"/>
                                </div>
                                <div class="card-list__title">Готовые коммуникации</div>
                                <div class="card-list__list-container"></div>
                                <div class="card-list__list-item">Газ 4м3</div>
                                <div class="card-list__list-item">Электричество 10-50 КВт</div>
                                <div class="card-list__list-item">Дороги из щебня, 6 метров в ширину</div>
                                <div class="card-list__list-item">Уличное освещение на всей территории</div>
                                <div class="card-list__list-item">Территория с КПП и охраной</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header">Нам доверяют</div>
        <div class="slider-trust">
            <div class="glide js-slider-trust">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <div class="glide__slide">
                            <img class="img slider-trust__item" src="http://placehold.it/500x300/faa"/>
                        </div>
                        <div class="glide__slide">
                            <img class="img slider-trust__item" src="http://placehold.it/500x300/afa"/>
                        </div>
                        <div class="glide__slide">
                            <img class="img slider-trust__item" src="http://placehold.it/500x300/aaf"/>
                        </div>
                        <div class="glide__slide">
                            <img class="img slider-trust__item" src="http://placehold.it/500x300/faf"/>
                        </div>
                        <div class="glide__slide">
                            <img class="img slider-trust__item" src="http://placehold.it/500x300/ffa"/>
                        </div>
                    </div>
                </div>
                <div class="slider-trust__arrows">
                    <div class="slider-trust-controls">
                        <div data-glide-el="controls">
                            <div class="slider-trust-controls__arrow glide__arrow glide__arrow--prev" data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                        fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-trust-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <li class="glide__bullet" data-glide-dir="=0">0</li>
                            <li class="glide__bullet" data-glide-dir="=1">1</li>
                            <li class="glide__bullet" data-glide-dir="=2">2</li>
                            <li class="glide__bullet" data-glide-dir="=3">3</li>
                            <li class="glide__bullet" data-glide-dir="=4">4</li>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-trust-controls__arrow glide__arrow glide__arrow--next" data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                        fill="#D1D1D1"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text form-wide__text--vertical-md">
                            <div class="form-wide__title">Экскурсия по загородной жизни</div>
                            <div class="form-wide__description">Приглашаем вас на обзорную экскурсию по загородной жизни в один из
                                наших поселков. Заполните форму ниже, и мы вам перезвоним.
                            </div>
                        </div>
                        <form class="form-wide__form js-form" action="/?ajaxAction=formExcursion" data-name="wide-excursion">
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="name" placeholder="Имя" data-validate="required,name"/>
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                           data-validate="required,phone" data-masking="phone"
                                    />
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--policy">
                                <div class="checkbox js-checkbox">
                                    <label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                        <div class="checkbox__custom checkbox__custom--border"></div>
                                        <div class="checkbox__text">Подтверждаю согласие с
                                            <a class="checkbox__link" href="#" target="_blank"> политикой обработки персональных данных</a>
                                        </div>
                                    </label>
                                    <div class="checkbox__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--submit">
                                <button class="button button--primary" type="submit">
                                    <span>Записаться</span>
                                </button>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--response">
                                <div class="form-wide__response"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden pb-large">
    <div class="container">
        <div class="section-header">А что у нас нового?</div>
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
                                    <div class="glide__slide">
                                        <a class="news-card" href="#">
                                            <div class="news-card__image">
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                                     alt="Итоги зимнего праздника в «Альпийской долине»"
                                                />
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
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
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
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
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
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
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
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
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Андрей</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
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
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Андрей</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
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
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Андрей</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
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
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
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
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text">Вот и наступила Масленичная неделя — праздник, справедливо
                                                    считающийся одним из самых «кулинарных» праздников
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
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
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                                fill="#D1D1D1"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');

?>