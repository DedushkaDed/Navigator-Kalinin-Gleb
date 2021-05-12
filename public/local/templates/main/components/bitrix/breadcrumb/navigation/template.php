<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult)) {
    return '';
}

ob_start(); ?>

<div class="breadcrumbs">
 <?php $iElementCount = count($arResult);
    foreach ($arResult as $iKey => $aItem) :?>
        <?if (!empty($aItem['LINK']) && $iKey < ($iElementCount - 1)) :?>
            <a class="breadcrumbs__item" href="<?=$aItem['LINK']?>"><?=$aItem['TITLE']?></a>
            <span class="breadcrumbs__divider">&gt;</span>
        <?php else :?>
            <span class="breadcrumbs__item"><?=$aItem['TITLE']?></span>
        <?php endif; ?>
    <?php endforeach?>
</div>

<?php
$sResultBuffer = ob_get_contents();
ob_end_clean();
return $sResultBuffer;
