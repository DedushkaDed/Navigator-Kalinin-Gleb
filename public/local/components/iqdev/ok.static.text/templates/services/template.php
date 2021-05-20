<?
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
            <div class="separate-paragraph__title separate-paragraph__title--image">
                <img class="img" src="<?=$arResult['options']['paragraphHeader']['title_image']?>"/>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$arResult['options']['paragraphHeader']['text']?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <img class="img" src="<?=$arResult['options']['titleImage']?>"/>
    </div>
</section>
