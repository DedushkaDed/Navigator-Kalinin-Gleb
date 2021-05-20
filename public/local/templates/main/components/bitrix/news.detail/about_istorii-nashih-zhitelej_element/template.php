<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule('iqdev');
$aSocialMediaOptions = \IQDEV\Options\Options::getPageOptions('social');

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

if (empty($arResult)) {
    return;
} ?>

<section class="section section--overflow-hidden mb-medium">
    <div class="container">
        <div class="detail">
            <div class="detail__item">
                <div class="detail-header">
                    <h1 class="detail-header__title"><?= $arResult['NAME'] ?? '' ?></h1>
                    <div class="detail-header__footer">
                        <div class="detail-header__date"><?= $arResult['PROPERTIES']['DATE']['VALUE'] ?? '' ?></div>
                        <?if (!empty($aSocialMediaOptions)) :?>
                            <div class="detail-header__share">
                                <div class="detail-header__share-title">Поделиться:</div>
                                <a class="detail-header__share-icon" href="<?=$aSocialMediaOptions['facebook']?>"
                                   target="_blank">
                                    <div class="icon">
                                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.57895 6.875V4.375C6.57895 3.685 7.16842 3.125 7.89474
                                            3.125H9.21053V0H6.57895C4.39868 0 2.63158 1.67875
                                            2.63158 3.75V6.875H0V10H2.63158V20H6.57895V10H9.21053L10.5263
                                            6.875H6.57895Z">
                                            </path>
                                        </svg>
                                    </div>
                                </a>
                                <a class="detail-header__share-icon" href="<?=$aSocialMediaOptions['vkontakte']?>"
                                   target="_blank">
                                    <div class="icon">
                                        <svg width="25" height="14" viewBox="0 0 25 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.8446 12.1602C23.7799 12.0527 23.3799 11.1894 21.4551
                                             9.41514C19.44 7.55723 19.7107 7.85892 22.1378 4.6464C23.616
                                             2.68992 24.207 1.49512 24.0221 0.984342C23.8461 0.497462
                                             22.7589 0.625902 22.7589 0.625902L19.1437 0.646811C19.1437
                                             0.646811 18.876 0.610967 18.676 0.728954C18.4821 0.845447
                                             18.3572 1.11428 18.3572 1.11428C18.3572 1.11428 17.7843
                                             2.62868 17.0204 3.91608C15.4098 6.63275 14.7647 6.77613
                                             14.5015 6.60736C13.8894 6.21457 14.0428 5.02724 14.0428
                                             4.18491C14.0428 1.55187 14.4443 0.45415 13.2594 0.170385C12.8654
                                             0.0762949 12.5766 0.013568 11.5706 0.00311351C10.2803 -0.010328
                                             9.18706 0.007594 8.56899 0.307787C8.15695 0.507916 7.83965
                                             0.954472 8.03364 0.979862C8.27275 1.01123 8.81411 1.12473
                                             9.10134 1.51304C9.47278 2.01336 9.45925 3.13946 9.45925
                                             3.13946C9.45925 3.13946 9.67278 6.23847 8.96149 6.62379C8.47275
                                             6.88814 7.80356 6.34899 6.36743 3.88322C5.63207 2.62122 5.07566
                                             1.2248 5.07566 1.2248C5.07566 1.2248 4.96889 0.964927 4.77791
                                             0.826031C4.54633 0.657266 4.22151 0.6035
                                             4.22151 0.6035L0.783816 0.624409C0.783816 0.624409 0.268012
                                             0.639344 0.0785334 0.861876C-0.0898924 1.06051 0.0649992
                                             1.46973 0.0649992 1.46973C0.0649992 1.46973 2.7568 7.72301
                                             5.8035 10.8758C8.59907 13.7657 11.7721 13.576 11.7721
                                             13.576H13.2097C13.2097 13.576 13.6443 13.5282 13.8654
                                             13.2908C14.0699 13.0727 14.0624 12.6635 14.0624
                                             12.6635C14.0624 12.6635 14.0338 10.7473 14.9301
                                             10.4651C15.8128 10.1873 16.9467 12.317 18.1482
                                             13.1369C19.0565 13.7567 19.7467 13.6208 19.7467
                                             13.6208L22.9604 13.576C22.9604 13.576 24.6416
                                             13.473 23.8446 12.1602Z"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a class="detail-header__share-icon"
                                   href="<?=$aSocialMediaOptions['odnoklassniki']?>" target="_blank">
                                    <div class="icon">
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.7925 3.02543C6.97143 3.02543 7.93019 3.9842 7.93019
                                             5.16312C7.93019 6.3385 6.97143 7.29726 5.7925 7.29726C4.61357 7.29726
                                             3.65481 6.3385 3.65481 5.16312C3.65481 3.9842 4.61357 3.02543 5.7925
                                             3.02543ZM5.7925 10.3227C8.64039 10.3227 10.9556 8.00746 10.9556
                                             5.16312C10.9556 2.31524 8.64039 0 5.7925 0C2.94462 0 0.632928 2.31524
                                             0.632928 5.16312C0.632928 8.00746 2.94462 10.3227 5.7925 10.3227ZM7.88048
                                             14.5342C8.93157 14.2927 9.94359 13.8772 10.8775 13.2913C11.5841 12.8474
                                             11.7972 11.9135 11.3533 11.2069C10.9059 10.4967 9.97555 10.2836 9.26536
                                             10.7311C7.15252 12.0591 4.43248 12.0591 2.31609 10.7311C1.60945 10.2836
                                             0.67554 10.4967 0.231668 11.2069C-0.212205 11.9135 0.000853446
                                             12.8474 0.707498 13.2913C1.64141 13.8772 2.65343 14.2927 3.70452
                                             14.5342L0.817579 17.4176C0.228116 18.007 0.228116 18.9658
                                             0.817579 19.5552C1.11586 19.85 1.49937 19.9991 1.88642
                                             19.9991C2.27348 19.9991 2.66054 19.85 2.95882 19.5552L5.7925
                                             16.7216L8.62973 19.5552C9.21919 20.1483 10.1744 20.1483
                                             10.7674 19.5552C11.3569 18.9658 11.3569 18.007 10.7674
                                             17.4176L7.88048 14.5342Z">
                                            </path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            </div>
            <div class="detail__item"></div>
            <div class="detail__item">
                <div class="detail-content">
                    <div class="detail-content__image">
                        <img class="img" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?? '' ?>"/>
                    </div>
                    <? foreach ($arResult['PROPERTIES']['TEXT_HISTORY_RESIDENT']['VALUE'] as $aTextNews) : ?>
                        <p><?= $aTextNews['TEXT'] ?? '' ?></p>
                    <? endforeach; ?>

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "additional-block",
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
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => ["NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT"],
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('additional_content'),
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "NEWS_COUNT" => "5",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PROPERTY_CODE" => ["TEXT_PLUSES"],
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
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "aside_banners",
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
                    "FIELD_CODE" => ["NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT"],
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('aside_banners'),
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "NEWS_COUNT" => "1",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PROPERTY_CODE" => ["LINK"],
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
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_our_news_photo_report_from_the_company",
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
                "FIELD_CODE" => ["PREVIEW_PICTURE"],
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('photo_report'),
                "IBLOCK_TYPE" => "content",
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
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
            ]
        ); ?>
    </div>
</section>
<section class="section mb-large">
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
                                            <a class="checkbox__link" href="#" target="_blank"
                                            > политикой обработки персональных данных
                                            </a>
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
