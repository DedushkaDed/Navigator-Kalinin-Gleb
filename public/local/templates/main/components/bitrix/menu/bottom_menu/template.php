<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}



?>

<?php
if (empty($arResult)) {
    return;
}
?>
<div class="footer__navigation">
    <?php foreach ($arResult as $aItem) : ?>
        <div class="footer__navigation-item" href="<?= $aItem["LINK"] ?>">
            <span><?= $aItem["TEXT"] ?></span>
            <?php if (!empty($aItem['subitems'])) : ?>
                <div class="footer__navigation-subitems">
                    <?php foreach ($aItem['subitems'] as $aSubItem) : ?>
                        <a class="footer__navigation-subitem" href="/projects/detail"><?= $aSubItem['TEXT'] ?></a>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
        </div>
    <? endforeach ?>
</div>
