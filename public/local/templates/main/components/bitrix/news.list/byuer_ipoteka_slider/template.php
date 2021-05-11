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
<?php dump($arResult['mapCards'])?>
<div class="tabs js-tabs">
    <div class="tabs__inner tabs__inner--offset">
        <div class="tabs-navigation js-tabs-navigation">
            <div class="tabs-navigation__active"></div>
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <?if(!empty($aItem['activeItem'])) :?>
                    <div class="tabs-navigation__item <?=$aItem['activeItem']?>" data-tab="<?=$aItem['bankCode']?>"><?=$aItem['bankTitle']?></div>
                <?else :?>
                    <div class="tabs-navigation__item" data-tab="<?=$aItem['bankCode']?>"><?=$aItem['bankTitle']?></div>
                <?endif;?>
            <?php endforeach;?>
        </div>
    </div>
    <div class="tabs__contents">
            <div class="tabs__content js-tabs__content active" data-tab-content="<?=$aItem['CODE']?>">
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
        <div class="tabs__content js-tabs__content" data-tab-content="zapsikombank">
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