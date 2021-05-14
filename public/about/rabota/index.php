<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
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
);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "about_rabota_accordion",
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
        "FIELD_CODE" => ["NAME", "PREVIEW_TEXT", "DETAIL_TEXT"],
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('job_accordion'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "NEWS_COUNT" => "10",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PROPERTY_CODE" => ["TASKS", "REQUIREMENTS", "CONDITIONS"],
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
);
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "about_job_content",
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
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => ["NAME"],
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('job_content'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "NEWS_COUNT" => "10",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PROPERTY_CODE" => [
            "VACANCY_TEXT_FIRST",
            "VACANCY_TEXT_SECOND",
            "VACANCY_TEXT_THIRD",
            "VACANCY_TEXT_FOURTH",
            "VACANCY_TEXT_FIFTH",
            "IMAGE_CONTENT",
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
);
?>
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

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
