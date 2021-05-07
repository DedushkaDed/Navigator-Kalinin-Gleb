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

\Bitrix\Main\Loader::includeModule('iqdev');
$iIblockPayment = IQDEV\Base\Helper::getIblockId('payment_workstage');

?>

<?php if (empty($arResult['rassrochkaModule'])) {
    return;
} ?>

<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <h1><?=$arResult['rassrochkaModule']['separateParagraphTitle']?></h1>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['rassrochkaModule']['separateParagraphText']?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "buyer_rassrochka_work_stage",
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
        "IBLOCK_ID" => $iIblockPayment,
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
<section class="section section--overflow-hidden mt-medium mb-large">
    <div class="container">
        <div class="section-header"><?=$arResult['rassrochkaModule']['sectionHeader']?></div>
        <div class="grid-unit">
            <div class="grid-unit__inner">
                <div class="grid-unit__item grid-unit__item--banner grid-unit__item--col2">
                    <div class="grid-card grid-card--xs-border-radius">
                        <div class="grid-card__text"><?=$arResult['rassrochkaModule']['cardLargeText']?></div>
                        <div class="grid-card__image-wrapper">
                            <img src="<?=$arResult['rassrochkaModule']['cardLargeImage']?>"/>
                        </div>
                    </div>
                </div>
                <div class="grid-unit__item">
                    <div class="card-color card-color--blue">
                        <div class="card-color__text card-color__text--grow">
                            <?=$arResult['rassrochkaModule']['firstItemText']?>
                        </div>
                        <div class="card-color__subcontent">
                            <div class="circle-percent circle-percent--background-dark-blue">
                                <?=$arResult['rassrochkaModule']['firstItemPercent']?></div>
                        </div>
                    </div>
                </div>
                <div class="grid-unit__item">
                    <div class="card-color card-color--gray">
                        <div class="card-color__text card-color__text--grow">
                            <?=$arResult['rassrochkaModule']['secondItemText']?>
                        </div>
                    </div>
                </div>
                <div class="grid-unit__item">
                    <div class="card-color card-color--green">
                        <div class="card-color__text card-color__text--grow">
                            <?=$arResult['rassrochkaModule']['thirdItemText']?>
                        </div>
                    </div>
                </div>
                <div class="grid-unit__item">
                    <div class="card-color card-color--gray">
                        <div class="card-color__text card-color__text--grow">
                            <?=$arResult['rassrochkaModule']['fourthItemText']?>
                        </div>
                    </div>
                </div>
                <div class="grid-unit__item grid-unit__item--col2">
                    <div class="card-color card-color--border card-color--center">
                        <div class="card-color__grid">
                            <div><?=$arResult['rassrochkaModule']['fifthItemText']?></div>
                            <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                <div class="button button--primary">
                                    <span><?=$arResult['rassrochkaModule']['fifthItemButtonLabel']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-unit-mobile-slider grid-unit-mobile-slider--offset-top js-grid-unit-mobile-slider">
                    <div class="grid-unit-mobile-slider__track" data-glide-el="track">
                        <div class="grid-unit-mobile-slider__carousel">
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--blue">
                                    <div class="card-color__text card-color__text--grow">
                                        <?=$arResult['rassrochkaModule']['firstItemText']?>
                                    </div>
                                    <div class="card-color__subcontent">
                                        <div class="circle-percent circle-percent--background-dark-blue">
                                            <?=$arResult['rassrochkaModule']['firstItemPercent']?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--gray">
                                    <div class="card-color__text card-color__text--grow"
                                    ><?=$arResult['rassrochkaModule']['secondItemText']?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--green">
                                    <div class="card-color__text card-color__text--grow"
                                    ><?=$arResult['rassrochkaModule']['thirdItemText']?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--gray">
                                    <div class="card-color__text card-color__text--grow"
                                    ><?=$arResult['rassrochkaModule']['fourthItemText']?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--border card-color--center">
                                    <div class="card-color__grid">
                                        <div><div><?=$arResult['rassrochkaModule']['fifthItemText']?></div></div>
                                        <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                            <div class="button button--primary">
                                                <span><?=$arResult['rassrochkaModule']['fifthItemButtonLabel']?></span>
                                            </div>
                                        </div>
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