<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult['options'])) {
    return;
}
?>
<section class="section mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <span><?=$arResult['options']['paragraphPermanentServices']['title'] ?? ''?></span>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['options']['paragraphPermanentServices']['text'] ?? ''?>
                </div>
            </div>
        </div>
    </div>
</section>
