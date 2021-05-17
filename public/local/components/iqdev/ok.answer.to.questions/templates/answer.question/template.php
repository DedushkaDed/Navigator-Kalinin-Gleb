<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return null;
}
?>
<section class="section mb-medium">
    <div class="container">
        <?
        $APPLICATION->IncludeComponent(
            "iqdev:ok.static.text",
            "answer.question",
            []
        );
        ?>
        <div class="accordion-container js-accordion accordion-container--show-more">
            <? foreach ($arResult as $aItem) :?>
                <div class="accordion <?=$aItem['backgorundColor'] ?? ''?>">
                    <div class="accordion__header">
                        <div class="accordion__header-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                <path
                                    d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409
                                    7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172
                                    7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172
                                    1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                    4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                </path>
                            </svg>
                        </div>
                        <div class="accordion__header-text">
                            <div class="accordion__header-text-primary">
                                <?=$aItem['title']?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__body" style="display: none">
                        <p><?=$aItem['description']?></p>
                        <p><?=$aItem['detail_text']?></p>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
