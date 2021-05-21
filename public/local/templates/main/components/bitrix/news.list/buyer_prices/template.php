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

if (empty($arResult['mapCards'])) {
    return null;
}
?>
<section class="section mt-medium mb-medium">
    <div class="container">
        <h1 class="section-header"><?=$arResult['mapCards']['options']['sectionHeaderA'] ?? ''?></h1>
        <div class="price-list">
            <div class="price-list__accordion">
                <div class="accordion-container js-accordion">
                    <?foreach ($arResult['mapCards']['items'] as $aItem) :?>
                        <?if (!empty($aItem['activeItem'])) :?>
                            <div class="accordion <?=$aItem['activeItem']?>">
                                <div class="accordion__header">
                                    <div class="accordion__header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="13" height="9" viewBox="0 0 13 9" fill="none">
                                            <path
                                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                            4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698
                                            7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654
                                            4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698
                                            0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                            4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="accordion__header-text accordion__header-text--grid">
                                        <div class="accordion__header-text-primary">
                                            <?=$aItem['AccordionHeader'] ?? ''?>
                                        </div>
                                        <div class="accordion__header-text-secondary
                                    accordion__header-text-secondary--bold">
                                            <?=$aItem['AccordionHeaderPrice'] ?? ''?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body">
                                    <div class="price-list__information">
                                        <div class="price-list__text">
                                            <?=$aItem['AccordionListFirstLabel'] ?? ''?>
                                        </div>
                                        <div class="price-list__value">
                                            <?=$aItem['AccordionListFirstValue'] ?? ''?>
                                        </div>
                                    </div>
                                    <div class="price-list__information">
                                        <div class="price-list__text">
                                            <?=$aItem['AccordionListSecondLabel'] ?? ''?>
                                        </div>
                                        <div class="price-list__value">
                                            <?=$aItem['AccordionListSecondValue'] ?? ''?>
                                        </div>
                                    </div>
                                    <div class="price-list__summary">
                                        <div class="list-icon">
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionFirstIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionFirstIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img"
                                                         src="<?=$aItem['AccordionSecondIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionSecondIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionThirdIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionThirdIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?else :?>
                            <div class="accordion <?=$aItem['itemBackgroundColor'] ?? ''?>">
                                <div class="accordion__header">
                                    <div class="accordion__header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="13" height="9" viewBox="0 0 13 9" fill="none">
                                            <path
                                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                            4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698
                                            7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654
                                            4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698
                                            0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                            4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="accordion__header-text accordion__header-text--grid">
                                        <div class="accordion__header-text-primary">
                                            <?=$aItem['AccordionHeader'] ?? ''?>
                                        </div>
                                        <div class="accordion__header-text-secondary
                                    accordion__header-text-secondary--bold">
                                            <?=$aItem['AccordionHeaderPrice'] ?? ''?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body" style="display: none">
                                    <div class="price-list__information">
                                        <div class="price-list__text">
                                            <?=$aItem['AccordionListFirstLabel'] ?? ''?>
                                        </div>
                                        <div class="price-list__value">
                                            <?=$aItem['AccordionListFirstValue'] ?? ''?>
                                        </div>
                                    </div>
                                    <div class="price-list__information">
                                        <div class="price-list__text">
                                            <?=$aItem['AccordionListSecondLabel'] ?? ''?>
                                        </div>
                                        <div class="price-list__value">
                                            <?=$aItem['AccordionListSecondValue'] ?? ''?>
                                        </div>
                                    </div>
                                    <div class="price-list__summary">
                                        <div class="list-icon">
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionFirstIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionFirstIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img"
                                                         src="<?=$aItem['AccordionSecondIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionSecondIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionThirdIconPath'] ?? ''?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aItem['AccordionThirdIconLabel'] ?? ''?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                </div>
            </div>
            <div class="price-list__enumeration price-list__enumeration--gray">
                <div class="price-list__enumeration-title"><?=$arResult['mapCards']['options']['priceListTitle'] ?? ''?></div>
                <?if (!empty($arResult['mapCards']['options']['list'])) :?>
                    <ul class="price-list__list">
                        <?foreach ($arResult['mapCards']['options']['list'] as $aItem) :?>
                            <li class="price-list__list-item"><?=$aItem?></li>
                        <?endforeach;?>
                    </ul>
                <?endif;?>
                <div class="price-list__icon">
                    <img src="<?=$arResult['mapCards']['options']['priceListImage'] ?? ''?>"/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <span><?=$arResult['mapCards']['options']['separateParagraphTitle'] ?? ''?></span>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['mapCards']['options']['separateParagraphText'] ?? ''?>
                </div>
            </div>
        </div>
    </div>
</section>
