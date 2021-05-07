<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>
<?php $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "navigation_tabs",
    [
        "ALLOW_MULTI_SELECT" => "N",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_USE_GROUPS" => "N",
        "ROOT_MENU_TYPE" => "subtop",
        "USE_EXT" => "Y",
        "COMPONENT_TEMPLATE" => "navigation_tabs",
    ],
    false
); ?>
    <section class="section mt-medium mb-medium">
        <div class="container">
            <h1 class="section-header">Цены на земельные участки</h1>
            <div class="price-list">
                <div class="price-list__accordion">
                    <div class="accordion-container js-accordion">
                        <div class="accordion accordion--active">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text accordion__header-text--grid">
                                    <div class="accordion__header-text-primary">Альпийская долина</div>
                                    <div class="accordion__header-text-secondary accordion__header-text-secondary--bold"
                                    >от 550 000 до 1 907 100 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body">
                                <div class="price-list__information">
                                    <div class="price-list__text">В поселке &quot;Альпийская долина&quot; представлены участки</div>
                                    <div class="price-list__value">от 9 до 16 соток</div>
                                </div>
                                <div class="price-list__information">
                                    <div class="price-list__text">Минимальная стоимость 1 сотки на 22.03.2019</div>
                                    <div class="price-list__value">55 000 ₽</div>
                                </div>
                                <div class="price-list__summary">
                                    <div class="list-icon">
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/1.svg"/>
                                            </div>
                                            <div class="list-icon__text">61 продано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/2.svg"/>
                                            </div>
                                            <div class="list-icon__text">8 забронировано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/3.svg"/>
                                            </div>
                                            <div class="list-icon__text">233 доступно</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion--sand">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text accordion__header-text--grid">
                                    <div class="accordion__header-text-primary">Есенино</div>
                                    <div class="accordion__header-text-secondary accordion__header-text-secondary--bold"
                                    >от 383 232 до 707 850 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <div class="price-list__information">
                                    <div class="price-list__text">В поселке &quot;Альпийская долина&quot; представлены участки</div>
                                    <div class="price-list__value">от 9 до 16 соток</div>
                                </div>
                                <div class="price-list__information">
                                    <div class="price-list__text">Минимальная стоимость 1 сотки на 22.03.2019</div>
                                    <div class="price-list__value">55 000 ₽</div>
                                </div>
                                <div class="price-list__summary">
                                    <div class="list-icon">
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/1.svg"/>
                                            </div>
                                            <div class="list-icon__text">18 продано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/2.svg"/>
                                            </div>
                                            <div class="list-icon__text">8 забронировано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/3.svg"/>
                                            </div>
                                            <div class="list-icon__text">233 доступно</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text accordion__header-text--grid">
                                    <div class="accordion__header-text-primary">Ёлки</div>
                                    <div class="accordion__header-text-secondary accordion__header-text-secondary--bold"
                                    >от 504 000 до 1 233 600 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <div class="price-list__information">
                                    <div class="price-list__text">В поселке &quot;Альпийская долина&quot; представлены участки</div>
                                    <div class="price-list__value">от 9 до 16 соток</div>
                                </div>
                                <div class="price-list__information">
                                    <div class="price-list__text">Минимальная стоимость 1 сотки на 22.03.2019</div>
                                    <div class="price-list__value">55 000 ₽</div>
                                </div>
                                <div class="price-list__summary">
                                    <div class="list-icon">
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/1.svg"/>
                                            </div>
                                            <div class="list-icon__text">6 продано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/2.svg"/>
                                            </div>
                                            <div class="list-icon__text">8 забронировано</div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="/assets/image/list-icon/prices/3.svg"/>
                                            </div>
                                            <div class="list-icon__text">233 доступно</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-list__enumeration price-list__enumeration--gray">
                    <div class="price-list__enumeration-title">Все коммуникации включены в стоимость</div>
                    <ul class="price-list__list">
                        <li class="price-list__list-item">Газ 4м³</li>
                        <li class="price-list__list-item">Электричество 10-50 КВт</li>
                        <li class="price-list__list-item">Дороги из щебня, 6 метров в ширину</li>
                        <li class="price-list__list-item">Уличное освещение на всей территории</li>
                        <li class="price-list__list-item">Территория с КПП и охраной</li>
                    </ul>
                    <div class="price-list__icon">
                        <img src="../../assets/image/price-list/prices/1.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mt-medium mb-medium">
        <div class="container">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title">
                    <span>От чего зависят цены на земельные участки?</span>
                </div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text"
                    >Самые выгодные цены на земельные участки в период декабрь-февраль. Плановое повышение стоимости сотки земли происходит ежегодно в весенний период.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--overflow-hidden mb-medium">
        <div class="container">
            <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-sand">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small">Расстояние от города</div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--border">
                        <div class="grid-card__grow">
                            <div class="grid-card__content grid-card__content--flex">
                                <div class="grid-card__grow">
                                    <div class="grid-card__title grid-card__title--small">Площадь участка</div>
                                </div>
                                <div class="grid-card__image-footer">
                                    <img class="img" src="../../assets/image/grid-unit-card/prices/1.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-2">
                    <div class="grid-card grid-card--background-primary grid-card--color-white">
                        <div class="grid-card__grow">
                            <div class="grid-card__content grid-card__content--flex">
                                <div class="grid-card__grow">
                                    <div class="grid-card__title grid-card__title--small">Особенности участка</div>
                                    <div class="grid-card__subtext">(рядом с лесом или у реки, участок на холме)</div>
                                </div>
                                <div class="grid-card__image-footer">
                                    <img class="img" src="../../assets/image/grid-unit-card/prices/2.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-2">
                    <div class="grid-card grid-card--border">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small"
                            >Воспользуйтесь инструментом подбора и забронируйте лучшую цену на земельный участок под ИЖС
                            </div>
                            <div class="mt-medium">
                                <a class="button button--primary button--auto-width" href="#">
                                    <span>Подобрать участок</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-sand">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small">Уровень экологии местности</div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-blue grid-card--color-white">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small">Наличие подведенных коммуникации</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mt-medium mb-medium">
        <div class="container-large">
            <div class="feedback__container">
                <div class="container">
                    <form class="feedback js-form" action="/?ajaxAction=formQuestion" data-name="question">
                        <div class="feedback__wrapper">
                            <h2 class="feedback__title">Появились вопросы?</h2>
                            <p class="feedback__subtitle">Оставьте свой телефон и мы свяжемся с вами</p>
                        </div>
                        <div class="feedback__wrapper">
                            <div class="feedback__form">
                                <div class="feedback__inputs-wrapper">
                                    <div class="feedback__input">
                                        <div class="input js-input">
                                            <input class="input__field" type="text" name="name" placeholder="Имя"
                                                   data-validate="required,name"
                                            />
                                            <div class="input__error"></div>
                                        </div>
                                    </div>
                                    <div class="feedback__input">
                                        <div class="input js-input">
                                            <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                   data-validate="required,phone" data-masking="phone"
                                            />
                                            <div class="input__error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback_checkbox">
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
                            </div>
                        </div>
                        <div class="feedback__button">
                            <button class="button button--primary" type="submit">
                                <span>Отправить</span>
                            </button>
                        </div>
                        <div></div>
                        <div class="feedback__response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
