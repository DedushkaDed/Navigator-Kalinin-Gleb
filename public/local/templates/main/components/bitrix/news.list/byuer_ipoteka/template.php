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

<?php if (empty($arResult['mortgageCards'])) {
    return;
} ?>

<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <h1><?=$arResult['mortgageCards']['separateParagraphTitle']?></h1>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['mortgageCards']['separateParagraphText']?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "byuer_ipoteka_work_stage",
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
        "IBLOCK_ID" => $arResult['mortgageCards']['iBlockMortgageWorkStageID'],
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
        <div class="section-header"><?=$arResult['mortgageCards']['sectionSliderTitle']?></div>
        <?php $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "byuer_ipoteka_slider",
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
                "IBLOCK_ID" => $arResult['mortgageCards']['iBlockMortgageSliderID'],
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
                "PROPERTY_CODE" => [
                    "ICON_SVG",
                    "INITIAL_PAYMENT_TEXT",
                    "INTEREST_RATE",
                    "DATE",
                    "SUMM",
                    "ADDITIONAL_TERMS",
                    "PRICE",
                    "SUMM_MAX",
                    "CREDIT_RATE",
                    "BUTTON_TEXT",
                ],
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
        <section class="section section--overflow-hidden pt-medium pb-large">
            <div class="container">
                <div class="info-section">
                    <div class="info-section__content">
                        <div class="info-section__header">
                            <?if (!empty($arResult['mortgageCards']['infoSection']['header'])) :?>
                                <div class="section-header">
                                    <?=$arResult['mortgageCards']['infoSection']['header']?></div>
                            <?php endif;?>
                        </div>
                        <ul class="info-section__list">
                            <?foreach ($arResult['mortgageCards']['infoSection']['list'] as $aItem) :?>
                                <?if (!empty($aItem['text'])) :?>
                                        <li class="info-section__list-item"><?=$aItem['text']?>
                                <?php endif;?>
                                <?if (!empty($aItem['tooltip'])) :?>
                                        <div class="info-section__tooltip">
                                            <div class="tooltip-trigger js-tooltip-trigger"
                                                 data-tooltip-content="<?=$aItem['tooltip']?>">
                                <svg class="tooltip__trigger" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M11.9961 6.14062C11.9961 6.29557 11.9665 6.44141 11.9072 6.57812C11.848
                                         6.71029 11.766 6.8265 11.6611 6.92676C11.5609 7.02246 11.4424 7.09993 11.3057
                                          7.15918C11.1735 7.21387 11.0299 7.24121 10.875 7.24121C10.7201 7.24121
                                           10.5742 7.21387 10.4375 7.15918C10.3053 7.09993 10.1891 7.02246 10.0889
                                            6.92676C9.98861 6.8265 9.90885 6.71029 9.84961 6.57812C9.79492 6.44141
                                             9.76758 6.29557 9.76758 6.14062C9.76758 5.98568 9.79492 5.84212 9.84961
                                              5.70996C9.90885 5.57324 9.98861 5.45475 10.0889 5.35449C10.1891 5.24967
                                               10.3053 5.16764 10.4375 5.1084C10.5742 5.04915 10.7201 5.01953 10.875
                                                5.01953C11.0299 5.01953 11.1735 5.04915 11.3057 5.1084C11.4424 5.16764
                                                 11.5609 5.24967 11.6611 5.35449C11.766 5.45475 11.848 5.57324 11.9072
                                                  5.70996C11.9665 5.84212 11.9961 5.98568 11.9961
                                                   6.14062ZM9.4873 8H11.5039L10.499 12.7578C10.4762 12.8353 10.4603
                                                    12.9128 10.4512 12.9902C10.4466 13.0632 10.4443 13.1361 10.4443
                                                     13.209C10.4443 13.4049 10.4899 13.5417 10.5811 13.6191C10.6722
                                                      13.6921 10.8158 13.7285 11.0117 13.7285C11.1439 13.7285 11.2396
                                                       13.7194 11.2988 13.7012C11.3581 13.6829 11.4128 13.6624 11.4629
                                                        13.6396C11.4447 13.8903 11.3877 14.1068 11.292 14.2891C11.2008
                                                         14.4668 11.0846 14.6149 10.9434 14.7334C10.8021 14.8519
                                                          10.6426 14.9408 10.4648 15C10.2871 15.0547 10.1071 15.082
                                                           9.9248 15.082C9.71517 15.082 9.51921 15.0501 9.33691
                                                            14.9863C9.15462 14.9225 8.99512 14.8223 8.8584
                                                             14.6855C8.72624 14.5488 8.62142 14.3757 8.54395
                                                              14.166C8.46647 13.9564 8.42773 13.7035 8.42773
                                                               13.4072C8.42773 13.2796 8.43685 13.1406 8.45508
                                                                12.9902C8.47331 12.8353 8.50065 12.6689 8.53711
                                                                 12.4912L9.4873 8Z"
                                        fill="#2983D4">
                                </path>
                                                    <circle cx="10" cy="10" r="9.5" stroke="#2983D4"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif;?>
                            <?endforeach;?>
                        </ul>
                        <?if (!empty($arResult['mortgageCards']['infoSection']['description'])) :?>
                            <div class="info-section__description">
                                <?=$arResult['mortgageCards']['infoSection']['description']?></div>
                        <?php endif;?>
                    </div>
                    <?if (!empty($arResult['mortgageCards']['infoSection']['image'])) :?>
                        <img class="info-section__image" src="<?=$arResult['mortgageCards']['infoSection']['image']?>"
                             alt="<?=$arResult['mortgageCards']['infoSection']['alt']?>"/>
                    <?php endif;?>
                </div>
            </div>
        </section>
    </div>
</section>

