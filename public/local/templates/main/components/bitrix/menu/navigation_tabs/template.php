<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>

<section class="section mb-medium">
    <div class="container">
        <div class="tabs-navigation-wrapper">
            <div class="tabs-navigation js-tabs-navigation-static">
                <div class="tabs-navigation__active"></div>
                    <? foreach ($arResult as $aItem) : ?>
                        <? if ($aItem['SELECTED']) : ?>
                            <a class="tabs-navigation__item tabs-navigation__item--active" href="<?= $aItem['LINK'] ?>">
                                <?= $aItem['TEXT'] ?></a>
                        <? else :?>
                            <a class="tabs-navigation__item" href="<?= $aItem['LINK'] ?>"><?= $aItem['TEXT'] ?></a>
                        <? endif; ?>
                    <? endforeach; ?>
            </div>
        </div>
    </div>
</section>
