<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
?>

<?php if (empty($arResult['ITEMS'])) {
    return;
} ?>

<div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
    <?php foreach ($arResult['mapCards'] as $aItem): ?>
        <div class="grid-layout__item grid-layout__item--md-span-column-<?= $aItem['size'] ?>
        grid-layout__item--lg-span-column-<?= $aItem['size'] ?>">
            <?php if (!empty($aItem['image'])): ?>
                <a class="grid-card" href="<?= $aItem['link'] ?>">
                    <img class="grid-card__image" src="<?= $aItem['image'] ?>"/>
                    <div class="grid-card__arrow-link">
                        <div><?= $aItem['title'] ?></div>
                        <div class="grid-card__arrow-link-link">
                            <div class="arrow-link arrow-link--right">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806 6.48226 47 1.5 47"
                                              stroke="#6BBD45" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431 0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457 10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z"
                                          fill="#6BBD45 ">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            <?php else: ?>
                <div class="grid-card <?= $aItem['backgroundColor'] ?> <?= $aItem['textColor'] ?>">
                    <?php if (!empty($aItem['linkLabel'])): ?>
                        <div class="grid-card__grow">
                    <? endif; ?>
                            <div class="grid-card__content">
                                <?php if (!empty($aItem['title'])): ?>
                                    <div class="grid-card__title"><?= $aItem['title'] ?></div>
                                <? endif; ?>
                                <?php if (!empty($sDescription)): ?>
                                    <div class="grid-card__subtitle"><?= $aItem['description'] ?></div>
                                <? endif; ?>
                            </div>
                        </div>
                    <?php if (!empty($aItem['link'])): ?>
                        <a class="grid-card__button" href="<?= $aItem['link'] ?>"><?= $aItem['linkLabel'] ?></a>
                    <? endif; ?>
                </div>
            <? endif; ?>
        </div>
    <? endforeach; ?>
</div>
