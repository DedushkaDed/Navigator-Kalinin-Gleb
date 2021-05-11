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
<div class="tabs js-tabs">
    <div class="tabs__inner tabs__inner--offset">
        <div class="tabs-navigation js-tabs-navigation">
            <div class="tabs-navigation__active"></div>
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <?if(!empty($aItem['activeItem'])) :?>
                    <div class="tabs-navigation__item <?=$aItem['activeItem']?>" data-tab="<?=$aItem['bankCode']?>">
                        <?=$aItem['bankTitle']?></div>
                <?else :?>
                    <div class="tabs-navigation__item" data-tab="<?=$aItem['bankCode']?>"><?=$aItem['bankTitle']?></div>
                <?endif;?>
            <?php endforeach;?>
        </div>
    </div>
    <div class="tabs__contents">
        <?foreach ($arResult['mapCards'] as $aItem) :?>
            <?if (!empty($aItem['activeItem'])) :?>
                <div class="tabs__content js-tabs__content <?=$aItem['activeItem']?>"
                     data-tab-content="<?=$aItem['bankCode']?>">
                <?else :?>
                    <div class="tabs__content js-tabs__content " data-tab-content="<?=$aItem['bankCode']?>">
            <?endif;?>
                    <div class="mortgage js-mortgage">
                        <div class="mortgage__table">
                            <div class="mortgage__table-row">
                                <?if (!empty($aItem['initialPaymentLabel'])) :?>
                                    <div class="mortgage__table-title"><?=$aItem['initialPaymentLabel']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['initialPaymentValue'])) :?>
                                    <div class="mortgage__table-description"><?=$aItem['initialPaymentValue']?></div>
                                <?php endif;?>
                            </div>
                            <div class="mortgage__table-row">
                                <?if (!empty($aItem['interestRateLabel'])) :?>
                                   <div class="mortgage__table-title"><?=$aItem['interestRateLabel']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['interestRateValue'])) :?>
                                    <div class="mortgage__table-description"><?=$aItem['interestRateValue']?></div>
                                <?php endif;?>
                            </div>
                            <div class="mortgage__table-row">
                                <?if (!empty($aItem['dateLabel'])) :?>
                                    <div class="mortgage__table-title"><?=$aItem['dateLabel']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['dateValue'])) :?>
                                    <div class="mortgage__table-description"><?=$aItem['dateValue']?></div>
                                <?php endif;?>
                            </div>
                            <div class="mortgage__table-row">
                                <?if (!empty($aItem['sumLabel'])) :?>
                                    <div class="mortgage__table-title"><?=$aItem['sumLabel']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['sumValue'])) :?>
                                    <div class="mortgage__table-description"><?=$aItem['sumValue']?></div>
                                <?php endif;?>
                            </div>
                            <div class="mortgage__table-row">
                                <?if (!empty($aItem['additionalTermsLabel'])) :?>
                                    <div class="mortgage__table-title"><?=$aItem['additionalTermsLabel']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['additionalTermsValue'])) :?>
                                    <div class="mortgage__table-description"><?=$aItem['additionalTermsValue']?></div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="mortgage__calc">
                            <div class="mortgage__header">
                                <?if (!empty($aItem['calcTitle'])) :?>
                                    <div class="mortgage__title"><?=$aItem['calcTitle']?></div>
                                <?php endif;?>
                                <?if (!empty($aItem['icon'])) :?>
                                    <div class="mortgage__logo"
                                         style="background-image: url(<?=$aItem['icon']?>)">
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="mortgage__grid filter-slider js-filter-slider">
                                <div class="mortgage__grid-item">
                                    <?if (!empty($aItem['sumMaximumLabel'])) :?>
                                        <div class="filter-slider__slider-name"><?=$aItem['sumMaximumLabel']?></div>
                                    <?php endif;?>
                                    <div class="mortgage__grid-slider">
                                        <div class="filter-slider__slider js-cost-slider" data-cost-min="false"
                                             data-cost-min-default="50"
                                             data-cost-max="<?=$aItem['price']?>" id="mortrage__cost">
                                        </div>
                                        <div class="filter-slider__results filter-slider__results--no-offset">
                                            <div class="filter-slider__result
                                             filter-slider__result--cost js-cost-max-result"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mortgage__grid-item">
                                    <?if (!empty($aItem['initialPaymentLabel'])) :?>
                                        <div class="filter-slider__slider-name"><?=$aItem['initialPaymentLabel']?></div>
                                    <?php endif;?>
                                    <div class="mortgage__grid-slider">
                                        <div class="filter-slider__slider js-initial-contribution-slider"
                                             data-initial-contribution-min="false"
                                             data-initial-contribution-min-default="5"
                                             data-initial-contribution-max="100" id="mortrage__first-pay"
                                        ></div>
                                        <div class="filter-slider__results filter-slider__results--no-offset">
                                            <div class="filter-slider__result
                                             filter-slider__result--initial-contribution
                                              js-initial-contribution-max-result"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mortgage__grid-item">
                                    <?if (!empty($aItem['dateLabel'])) :?>
                                        <div class="filter-slider__slider-name"><?=$aItem['dateLabel']?></div>
                                    <?php endif;?>
                                    <div class="mortgage__grid-slider">
                                        <div class="filter-slider__slider js-interval-slider" data-interval-min="false"
                                             data-interval-max="10" id="mortrage__term" data-term-range-less="[1,7]"
                                             data-term-range-more="[1,<?=$aItem['dateValue']?>]"
                                             data-term-change-value="20">

                                        </div>
                                        <div class="filter-slider__results filter-slider__results--no-offset">
                                            <div class="filter-slider__result
                                             filter-slider__result--interval js-interval-max-result"></div>
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
                                        <div class="mortgage__rate"><?=$aItem['creditRateLabel']?></div>
                                        <div class="mortgage__rate-value js-mortgage__rate-value"
                                             data-rate-default="<?=$aItem['creditRateValue']?>"
                                             data-rate-member="10,1%" data-rate-first-pay="19,1%">
                                            <?=$aItem['creditRateValue']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mortgage__grid-item">
                                    <div class="mortgage__button button button--primary js-filter-slider-button">
                                        <?if (!empty($aItem['buttonLabel'])) :?>
                                            <span><?=$aItem['buttonLabel']?></span>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </div>
</div>