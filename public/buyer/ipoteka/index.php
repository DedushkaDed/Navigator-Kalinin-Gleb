<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
\Bitrix\Main\Loader::includeModule('iqdev');
$iIblockMortgageWorkStage = IQDEV\Base\Helper::getIblockId('mortgage_work_stage');
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
<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "byuer_ipoteka",
    [
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => ["NAME", "PREVIEW_TEXT"],
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => $iIblockMortgageWorkStage,
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "NEWS_COUNT" => "5",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PROPERTY_CODE" => ["ICON_SVG"],
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

    <section class="section mt-medium mb-medium" id="calc">
        <div class="container">
            <div class="section-header">Подать заявку на ипотеку возможно в следующие банки:</div>
            <div class="tabs js-tabs">
                <div class="tabs__inner tabs__inner--offset">
                    <div class="tabs-navigation js-tabs-navigation">
                        <div class="tabs-navigation__active"></div>
                        <div class="tabs-navigation__item active" data-tab="sber">Сбербанк</div>
                        <div class="tabs-navigation__item" data-tab="zapsib">Запсибкомбанк</div>
                    </div>
                </div>
                <div class="tabs__contents">
                    <div class="tabs__content js-tabs__content active" data-tab-content="sber">
                        <div class="mortgage js-mortgage">
                            <div class="mortgage__table">
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Первоначальный взнос</div>
                                    <div class="mortgage__table-description">от 25 %</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Процентная ставка</div>
                                    <div class="mortgage__table-description">11,4 % (для участников «зарплатного» проекта - 11,1 %)</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Срок</div>
                                    <div class="mortgage__table-description">до 30 лет</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Сумма</div>
                                    <div class="mortgage__table-description">до 75% стоимости</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Дополнительные условия</div>
                                    <div class="mortgage__table-description">если сумма ипотеки до 1 млн, то без отчета об оценке</div>
                                </div>
                            </div>
                            <div class="mortgage__calc">
                                <div class="mortgage__header">
                                    <div class="mortgage__title">Ипотечный калькулятор</div>
                                    <div class="mortgage__logo"
                                         style="background-image: url(&quot;../../assets/image/mortgage/logo/sberbank.svg&quot;)"
                                    ></div>
                                </div>
                                <div class="mortgage__grid filter-slider js-filter-slider">
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Стоимость</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-cost-slider" data-cost-min="false" data-cost-min-default="50"
                                                 data-cost-max="30000000" id="mortrage__cost"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div class="filter-slider__result filter-slider__result--cost js-cost-max-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Первоначальный взнос</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-initial-contribution-slider"
                                                 data-initial-contribution-min="false" data-initial-contribution-min-default="5"
                                                 data-initial-contribution-max="100" id="mortrage__first-pay"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div
                                                    class="filter-slider__result filter-slider__result--initial-contribution js-initial-contribution-max-result"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Срок ипотеки</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-interval-slider" data-interval-min="false"
                                                 data-interval-max="10" id="mortrage__term" data-term-range-less="[1,7]"
                                                 data-term-range-more="[1,15]" data-term-change-value="20"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div class="filter-slider__result filter-slider__result--interval js-interval-max-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="checkbox">
                                            <label class="checkbox__label">
                                                <input class="checkbox__field" type="checkbox" name="checkbox"/>
                                                <div class="checkbox__custom"></div>
                                                <div class="checkbox__text">Участник зарплатного проекта</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="mortgage__grid-slider">
                                            <div class="mortgage__rate">Ставка по кредиту</div>
                                            <div class="mortgage__rate-value js-mortgage__rate-value" data-rate-default="22,1%"
                                                 data-rate-member="10,1%" data-rate-first-pay="19,1%"
                                            >22,1%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="mortgage__button button button--primary js-filter-slider-button">
                                            <span>Рассчитать ежемесячный платёж</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__content js-tabs__content" data-tab-content="zapsib">
                        <div class="mortgage js-mortgage">
                            <div class="mortgage__table">
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Первоначальный взнос</div>
                                    <div class="mortgage__table-description">от 25 %</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Процентная ставка</div>
                                    <div class="mortgage__table-description"
                                    >100000 % (для участников «зарплатного» проекта - 100000 %)
                                    </div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Срок</div>
                                    <div class="mortgage__table-description">до 30 лет</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Сумма</div>
                                    <div class="mortgage__table-description">до 75% стоимости</div>
                                </div>
                                <div class="mortgage__table-row">
                                    <div class="mortgage__table-title">Дополнительные условия</div>
                                    <div class="mortgage__table-description">если сумма ипотеки до 1 млн, то без отчета об оценке</div>
                                </div>
                            </div>
                            <div class="mortgage__calc">
                                <div class="mortgage__header">
                                    <div class="mortgage__title">Ипотечный калькулятор</div>
                                    <div class="mortgage__logo"
                                         style="background-image: url(&quot;http://source.unsplash.com/1920x1080&quot;)"
                                    ></div>
                                </div>
                                <div class="mortgage__grid filter-slider js-filter-slider">
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Стоимость</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-cost-slider" data-cost-min="false" data-cost-min-default="50"
                                                 data-cost-max="3000000" id="mortrage__cost"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div class="filter-slider__result filter-slider__result--cost js-cost-max-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Первоначальный взнос</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-initial-contribution-slider"
                                                 data-initial-contribution-min="false" data-initial-contribution-min-default="25"
                                                 data-initial-contribution-max="100" id="mortrage__first-pay"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div
                                                    class="filter-slider__result filter-slider__result--initial-contribution js-initial-contribution-max-result"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="filter-slider__slider-name">Срок ипотеки</div>
                                        <div class="mortgage__grid-slider">
                                            <div class="filter-slider__slider js-interval-slider" data-interval-min="false"
                                                 data-interval-max="10" id="mortrage__term" data-term-range-less="[&quot;1&quot;,&quot;7&quot;]"
                                                 data-term-range-more="[&quot;1&quot;,&quot;15&quot;]" data-term-change-value="60"
                                            ></div>
                                            <div class="filter-slider__results filter-slider__results--no-offset">
                                                <div class="filter-slider__result filter-slider__result--interval js-interval-max-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item mortgage__no-project">
                                        <div class="checkbox">
                                            <label class="checkbox__label">
                                                <input class="checkbox__field" type="checkbox" name="checkbox"/>
                                                <div class="checkbox__custom"></div>
                                                <div class="checkbox__text">Участник зарплатного проекта</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="mortgage__grid-slider">
                                            <div class="mortgage__rate">Ставка по кредиту</div>
                                            <div class="mortgage__rate-value js-mortgage__rate-value" data-rate-default="11,1%"
                                                 data-rate-member="0,1%" data-rate-first-pay="9,1%"
                                            >11,1%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mortgage__grid-item">
                                        <div class="mortgage__button button button--primary js-filter-slider-button">
                                            <span>Рассчитать ежемесячный платёж</span>
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
<!--    <section class="section section--overflow-hidden pt-medium pb-large">-->
<!--        <div class="container">-->
<!--            <div class="info-section">-->
<!--                <div class="info-section__content">-->
<!--                    <div class="info-section__header">-->
<!--                        <div class="section-header">Документы, необходимые для заявки на ипотеку:</div>-->
<!--                    </div>-->
<!--                    <ul class="info-section__list">-->
<!--                        <li class="info-section__list-item">Цветной скан всех страниц паспорта</li>-->
<!--                        <li class="info-section__list-item">Cправка 2НДФЛ за 6 месяцев-->
<!--                            <div class="info-section__tooltip">-->
<!--                                <div class="tooltip-trigger js-tooltip-trigger"-->
<!--                                     data-tooltip-content="Справка 2НДФЛ и копия трудовой книжки не нужны в том случае, если вы участник зарплатного проекта банка, в котором оформляете ипотеку."-->
<!--                                >-->
<!--                                    <svg class="tooltip__trigger" width="20" height="20" viewBox="0 0 20 20" fill="none"-->
<!--                                         xmlns="http://www.w3.org/2000/svg"-->
<!--                                    >-->
<!--                                        <path-->
<!--                                            d="M11.9961 6.14062C11.9961 6.29557 11.9665 6.44141 11.9072 6.57812C11.848 6.71029 11.766 6.8265 11.6611 6.92676C11.5609 7.02246 11.4424 7.09993 11.3057 7.15918C11.1735 7.21387 11.0299 7.24121 10.875 7.24121C10.7201 7.24121 10.5742 7.21387 10.4375 7.15918C10.3053 7.09993 10.1891 7.02246 10.0889 6.92676C9.98861 6.8265 9.90885 6.71029 9.84961 6.57812C9.79492 6.44141 9.76758 6.29557 9.76758 6.14062C9.76758 5.98568 9.79492 5.84212 9.84961 5.70996C9.90885 5.57324 9.98861 5.45475 10.0889 5.35449C10.1891 5.24967 10.3053 5.16764 10.4375 5.1084C10.5742 5.04915 10.7201 5.01953 10.875 5.01953C11.0299 5.01953 11.1735 5.04915 11.3057 5.1084C11.4424 5.16764 11.5609 5.24967 11.6611 5.35449C11.766 5.45475 11.848 5.57324 11.9072 5.70996C11.9665 5.84212 11.9961 5.98568 11.9961 6.14062ZM9.4873 8H11.5039L10.499 12.7578C10.4762 12.8353 10.4603 12.9128 10.4512 12.9902C10.4466 13.0632 10.4443 13.1361 10.4443 13.209C10.4443 13.4049 10.4899 13.5417 10.5811 13.6191C10.6722 13.6921 10.8158 13.7285 11.0117 13.7285C11.1439 13.7285 11.2396 13.7194 11.2988 13.7012C11.3581 13.6829 11.4128 13.6624 11.4629 13.6396C11.4447 13.8903 11.3877 14.1068 11.292 14.2891C11.2008 14.4668 11.0846 14.6149 10.9434 14.7334C10.8021 14.8519 10.6426 14.9408 10.4648 15C10.2871 15.0547 10.1071 15.082 9.9248 15.082C9.71517 15.082 9.51921 15.0501 9.33691 14.9863C9.15462 14.9225 8.99512 14.8223 8.8584 14.6855C8.72624 14.5488 8.62142 14.3757 8.54395 14.166C8.46647 13.9564 8.42773 13.7035 8.42773 13.4072C8.42773 13.2796 8.43685 13.1406 8.45508 12.9902C8.47331 12.8353 8.50065 12.6689 8.53711 12.4912L9.4873 8Z"-->
<!--                                            fill="#2983D4"-->
<!--                                        ></path>-->
<!--                                        <circle cx="10" cy="10" r="9.5" stroke="#2983D4"></circle>-->
<!--                                    </svg>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="info-section__list-item">Цветной скан всех страниц паспорта-->
<!--                            <div class="info-section__tooltip">-->
<!--                                <div class="tooltip-trigger js-tooltip-trigger"-->
<!--                                     data-tooltip-content="Справка 2НДФЛ и копия трудовой книжки не нужны в том случае, если вы участник зарплатного проекта банка, в котором оформляете ипотеку."-->
<!--                                >-->
<!--                                    <svg class="tooltip__trigger" width="20" height="20" viewBox="0 0 20 20" fill="none"-->
<!--                                         xmlns="http://www.w3.org/2000/svg"-->
<!--                                    >-->
<!--                                        <path-->
<!--                                            d="M11.9961 6.14062C11.9961 6.29557 11.9665 6.44141 11.9072 6.57812C11.848 6.71029 11.766 6.8265 11.6611 6.92676C11.5609 7.02246 11.4424 7.09993 11.3057 7.15918C11.1735 7.21387 11.0299 7.24121 10.875 7.24121C10.7201 7.24121 10.5742 7.21387 10.4375 7.15918C10.3053 7.09993 10.1891 7.02246 10.0889 6.92676C9.98861 6.8265 9.90885 6.71029 9.84961 6.57812C9.79492 6.44141 9.76758 6.29557 9.76758 6.14062C9.76758 5.98568 9.79492 5.84212 9.84961 5.70996C9.90885 5.57324 9.98861 5.45475 10.0889 5.35449C10.1891 5.24967 10.3053 5.16764 10.4375 5.1084C10.5742 5.04915 10.7201 5.01953 10.875 5.01953C11.0299 5.01953 11.1735 5.04915 11.3057 5.1084C11.4424 5.16764 11.5609 5.24967 11.6611 5.35449C11.766 5.45475 11.848 5.57324 11.9072 5.70996C11.9665 5.84212 11.9961 5.98568 11.9961 6.14062ZM9.4873 8H11.5039L10.499 12.7578C10.4762 12.8353 10.4603 12.9128 10.4512 12.9902C10.4466 13.0632 10.4443 13.1361 10.4443 13.209C10.4443 13.4049 10.4899 13.5417 10.5811 13.6191C10.6722 13.6921 10.8158 13.7285 11.0117 13.7285C11.1439 13.7285 11.2396 13.7194 11.2988 13.7012C11.3581 13.6829 11.4128 13.6624 11.4629 13.6396C11.4447 13.8903 11.3877 14.1068 11.292 14.2891C11.2008 14.4668 11.0846 14.6149 10.9434 14.7334C10.8021 14.8519 10.6426 14.9408 10.4648 15C10.2871 15.0547 10.1071 15.082 9.9248 15.082C9.71517 15.082 9.51921 15.0501 9.33691 14.9863C9.15462 14.9225 8.99512 14.8223 8.8584 14.6855C8.72624 14.5488 8.62142 14.3757 8.54395 14.166C8.46647 13.9564 8.42773 13.7035 8.42773 13.4072C8.42773 13.2796 8.43685 13.1406 8.45508 12.9902C8.47331 12.8353 8.50065 12.6689 8.53711 12.4912L9.4873 8Z"-->
<!--                                            fill="#2983D4"-->
<!--                                        ></path>-->
<!--                                        <circle cx="10" cy="10" r="9.5" stroke="#2983D4"></circle>-->
<!--                                    </svg>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="info-section__list-item">Паспорт супруга/ги, если вы состоите в браке</li>-->
<!--                        <li class="info-section__list-item">Анкета, заполненная по форме банка</li>-->
<!--                    </ul>-->
<!--                    <div class="info-section__description">Заявка рассматривается-->
<!--                        <span>1-5 рабочих дней.</span>-->
<!--                        После одобрения ипотеки банком, мы подписываем с вами договор купли-продажи и передаем вам земельный участок в собственность.-->
<!--                    </div>-->
<!--                </div>-->
<!--                <img class="info-section__image" src="http://source.unsplash.com/1920x1080" alt="alt"/>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
