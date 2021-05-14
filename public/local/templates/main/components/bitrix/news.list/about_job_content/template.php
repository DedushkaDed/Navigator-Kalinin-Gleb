<?
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

if (empty($arResult['ITEMS'])) {
    return;
} ?>

<section class="section mb-large">
    <div class="container">
        <div class="section-header">Почему стоит работать у нас?</div>
        <? foreach ($arResult['ITEMS'] as $aItem) :?>
            <div class="vacancy-description">
                <div class="vacancy-description__item vacancy-description__item--gallery">
                    <div class="vacancy-description-gallery js-vacancy-description-gallery">
                        <div class="vacancy-description-gallery__image">
                            <img src="<?= $aItem['DISPLAY_PROPERTIES']['IMAGE_CONTENT']['FILE_VALUE'][0]['SRC'] ?>"/>
                        </div>
                        <div class="vacancy-description-gallery__slider <?= $aItem['PROPERTIES']['contentPosition'] ?>">
                            <div class="glide">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <? foreach ($aItem['DISPLAY_PROPERTIES']
                                                       ['IMAGE_CONTENT']['FILE_VALUE'] as $aImage) : ?>
                                            <li class="glide__slide">
                                                <img src="<?= $aImage['SRC'] ?>" data-index="<?= $aImage['ID'] ?>"/>
                                            </li>
                                        <? endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vacancy-description__item vacancy-description__item--text">
                    <div class="vacancy-description-text">
                        <div class="vacancy-description-text__title"><?= $aItem['NAME'] ?></div>
                        <div class="vacancy-description-text__text-blocks">
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FIRST']['NAME'] ?>
                                </div>
                                <div class="vacancy-description-text__text-block-text">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FIRST']['VALUE'] ?>
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_SECOND']['NAME'] ?>
                                </div>
                                <div class="vacancy-description-text__text-block-text"
                                ><?= $aItem['PROPERTIES']['VACANCY_TEXT_SECOND']['VALUE'] ?>
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_THIRD']['NAME'] ?></div>
                                <div class="vacancy-description-text__text-block-text"
                                ><?= $aItem['PROPERTIES']['VACANCY_TEXT_THIRD']['VALUE'] ?>
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FOURTH']['NAME'] ?>
                                </div>
                                <div class="vacancy-description-text__text-block-text">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FOURTH']['VALUE'] ?>
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FIFTH']['NAME'] ?>
                                </div>
                                <div class="vacancy-description-text__text-block-text">
                                    <?= $aItem['PROPERTIES']['VACANCY_TEXT_FIFTH']['VALUE'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</section>
