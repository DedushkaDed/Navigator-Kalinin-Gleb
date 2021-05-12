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
<section class="section mt-medium mb-medium">
    <div class="container">
        <h1 class="section-header"><?=$arResult['mapCards']['options']['sectionHeaderA']?></h1>
        <div class="price-list">
            <div class="price-list__accordion">
                <div class="accordion-container js-accordion">
                    <?foreach ($arResult['mapCards']['items'] as $iKey => $aItem) :?>
                        <?if (!empty($aItem['activeItem'])) :?>
                            <div class="accordion <?=$aItem['activeItem']?>">
                                <div class="accordion__header">
                                    <div class="accordion__header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                            <path
                                                    d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="accordion__header-text accordion__header-text--grid">
                                        <div class="accordion__header-text-primary"><?=$aItem['AccordionHeader']?></div>
                                        <div class="accordion__header-text-secondary accordion__header-text-secondary--bold"
                                        ><?=$aItem['AccordionHeaderPrice']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body">
                                    <div class="price-list__information">
                                        <div class="price-list__text"><?=$aItem['AccordionListFirstLabel']?></div>
                                        <div class="price-list__value"><?=$aItem['AccordionListFirstValue']?></div>
                                    </div>
                                    <div class="price-list__information">
                                        <div class="price-list__text"><?=$aItem['AccordionListSecondLabel']?></div>
                                        <div class="price-list__value"><?=$aItem['AccordionListSecondValue']?></div>
                                    </div>
                                    <div class="price-list__summary">
                                        <div class="list-icon">
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionFirstIconPath']?>"/>
                                                </div>
                                                <div class="list-icon__text"><?=$aItem['AccordionFirstIconLabel']?></div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionSecondIconPath']?>"/>
                                                </div>
                                                <div class="list-icon__text"><?=$aItem['AccordionSecondIconLabel']?></div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img" src="<?=$aItem['AccordionThirdIconPath']?>"/>
                                                </div>
                                                <div class="list-icon__text"><?=$aItem['AccordionThirdIconLabel']?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?else :?>
                            <?if (!empty($aItem['itemBackgroundColor'])) :?>
                                <div class="accordion <?=$aItem['itemBackgroundColor']?>">
                            <?else :?>
                                <div class="accordion">
                            <?php endif;?>
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text accordion__header-text--grid">
                                    <div class="accordion__header-text-primary"><?=$aItem['AccordionHeader']?></div>
                                    <div class="accordion__header-text-secondary accordion__header-text-secondary--bold"
                                    ><?=$aItem['AccordionHeaderPrice']?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <div class="price-list__information">
                                    <div class="price-list__text"><?=$aItem['AccordionListFirstLabel']?></div>
                                    <div class="price-list__value"><?=$aItem['AccordionListFirstValue']?></div>
                                </div>
                                <div class="price-list__information">
                                    <div class="price-list__text"><?=$aItem['AccordionListSecondLabel']?></div>
                                    <div class="price-list__value"><?=$aItem['AccordionListSecondValue']?></div>
                                </div>
                                <div class="price-list__summary">
                                    <div class="list-icon">
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="<?=$aItem['AccordionFirstIconPath']?>"/>
                                            </div>
                                            <div class="list-icon__text"><?=$aItem['AccordionFirstIconLabel']?></div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="<?=$aItem['AccordionSecondIconPath']?>"/>
                                            </div>
                                            <div class="list-icon__text"><?=$aItem['AccordionSecondIconLabel']?></div>
                                        </div>
                                        <div class="list-icon__item">
                                            <div class="list-icon__icon">
                                                <img class="img" src="<?=$aItem['AccordionThirdIconPath']?>"/>
                                            </div>
                                            <div class="list-icon__text"><?=$aItem['AccordionThirdIconLabel']?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="price-list__enumeration price-list__enumeration--gray">
                <div class="price-list__enumeration-title"><?=$arResult['mapCards']['options']['priceListTitle']?></div>
                <ul class="price-list__list">
                    <?foreach ($arResult['mapCards']['options']['list'] as $aItem) :?>
                        <li class="price-list__list-item"><?=$aItem?></li>
                    <?php endforeach;?>
                </ul>
                <div class="price-list__icon">
                    <img src="<?=$arResult['mapCards']['options']['priceListImage']?>"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <span><?=$arResult['mapCards']['options']['separateParagraphTitle']?></span>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['mapCards']['options']['separateParagraphText']?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    Вызов нижних инфоблоков - осуществлять через result.modifier.
        Там выкачивать ID инфоблока. Передавать сюда в компонент
-->
<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "buyer_prices_content",
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
        "FIELD_CODE" => ["NAME"],
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => $arResult["mapCards"]["IblockIdPricesContent"],
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PROPERTY_CODE" => ["BACKGROUND_COLOR","ICON_SVG","ADDITIONAL_TEXT","BUTTON_TEXT"],
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


<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "feedback_form_other",
    [
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
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
);