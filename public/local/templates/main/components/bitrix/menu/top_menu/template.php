<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>

<div class="navigation">
    <?foreach ($arResult as $aItem) :?>
        <?if (!empty($aItem['subitems'])) :?>
            <div class="navigation__item">
                <span class="navigation__page"><?= $aItem["TEXT"]?></span>
                <div class="navigation__arrow">
                    <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M8.83333 0.166626L10 1.33329L5 6.33329L-5.09966e-08 1.33329L1.16667
                               0.166626L5 3.99996L8.83333 0.166626Z"
                              fill="#675A54">
                        </path>
                    </svg>
                </div>
                <div class="navigation__dropdown">
                    <?foreach ($aItem['subitems'] as $aSubItem) :?>
                        <a class="navigation__subpage" href="<?= $aSubItem['LINK']?>">
                        <?= $aSubItem['TEXT']?></a>
                    <?endforeach;?>
                </div>
            </div>
        <?else :?>
        <a class="navigation__item" href="<?= $aItem["LINK"]?>">
            <span class="navigation__page"><?= $aItem["TEXT"]?></span>
        </a>
        <?endif;?>
    <?endforeach?>
</div>
