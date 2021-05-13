<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
} ?>

<div class="footer__navigation">
    <? foreach ($arResult as $aItem) : ?>
        <div class="footer__navigation-item" href="<?= $aItem["LINK"] ?>">
            <span><?= $aItem["TEXT"] ?></span>
            <? if (!empty($aItem['subitems'])) : ?>
                <div class="footer__navigation-subitems">
                    <? foreach ($aItem['subitems'] as $aSubItem) : ?>
                        <a class="footer__navigation-subitem"
                           href="<?= $aSubItem['LINK'] ?>"><?= $aSubItem['TEXT'] ?></a>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
        </div>
    <? endforeach ?>
</div>
