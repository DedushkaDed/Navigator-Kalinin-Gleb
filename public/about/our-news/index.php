<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->SetPageProperty(
    'description',
    'Описание страницы about'
);

$APPLICATION->SetPageProperty('title',
    'О нас');

$APPLICATION->SetTitle('О нас');

?>
<?php    $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "navigation_tabs",
    [
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => [
        ],
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_USE_GROUPS" => "N",
        "ROOT_MENU_TYPE" => "subtop",
        "USE_EXT" => "Y",
        "COMPONENT_TEMPLATE" => "navigation_tabs",
    ],
    false
); ?>
    <section class="section mb-large">
        <div class="container">
            <div class="grid-news grid-news--top">
                <div class="grid-news__item grid-news__item--half">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image news-card__image--grid-half">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-news__item grid-news__item--half">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image news-card__image--grid-half">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-news__item">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-news__item">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-news__item">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-news__item">
                    <a class="news-card" href="/about/our-news/detail">
                        <div class="news-card__image">
                            <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__title">С Днем Рождения!</div>
                            <div class="news-card__text">Мы поздравили постоянных партнеров — агенство недвижимости «СОВА» с днём
                                рождения!
                            </div>
                            <div class="news-card__wrapper">
                                <div class="news-card__link">Читать далее</div>
                                <span class="news-card__date">4.03.2019</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-30">
                <div class="pagination">
                    <a class="pagination__button pagination__button--prev" href="#">
                        <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.646446 3.64645C0.451184 3.84171 0.451184 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.97631 4.7308 0.659727 4.53553 0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64645ZM13 3.5L1 3.5L1 4.5L13 4.5L13 3.5Z"
                                fill="black"
                            ></path>
                        </svg>
                        <span>Назад</span>
                    </a>
                    <div class="pagination__label">Страница 3 из 9</div>
                    <div class="pagination__pages">
                        <a class="pagination__page" href="#">1</a>
                        <a class="pagination__page" href="#">2</a>
                        <div class="pagination__page pagination__page--active">3</div>
                        <a class="pagination__page" href="#">4</a>
                        <div class="pagination__page">...</div>
                        <a class="pagination__page" href="#">9</a>
                    </div>
                    <div class="pagination__button pagination__button--next pagination__button--disabled">
                        <span>Вперед</span>
                        <svg width="13" height="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.3536 3.64645C12.5488 3.84171 12.5488 4.15829 12.3536 4.35355L9.17157 7.53553C8.97631 7.7308 8.65973 7.7308 8.46447 7.53553C8.2692 7.34027 8.2692 7.02369 8.46447 6.82843L11.2929 4L8.46447 1.17157C8.2692 0.97631 8.2692 0.659727 8.46447 0.464465C8.65973 0.269203 8.97631 0.269203 9.17157 0.464465L12.3536 3.64645ZM-5.82819e-08 3.5L12 3.5L12 4.5L5.82819e-08 4.5L-5.82819e-08 3.5Z"
                                fill="black"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');

?>