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

$aFeedbackForm = \IQDEV\Options\Options::getPageOptions('feedback_form_main');


?>

<section class="section mb-large">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text form-wide__text--vertical-md">
                            <? if (!empty($aFeedbackForm['title'])) :?>
                                <div class="form-wide__title"><?=$aFeedbackForm['title']?></div>
                            <?php endif;?>
                            <? if (!empty($aFeedbackForm['description'])) :?>
                                <div class="form-wide__description"><?=$aFeedbackForm['description']?></div>
                            <?php endif;?>
                        </div>
                        <form class="form-wide__form js-form" action="/?ajaxAction=formExcursion"
                              data-name="wide-excursion">
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="name" placeholder="Имя"
                                           data-validate="required,name"/>
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                           data-validate="required,phone" data-masking="phone"
                                    />
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--policy">
                                <div class="checkbox js-checkbox">
                                    <label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                        <div class="checkbox__custom checkbox__custom--border"></div>
                                        <div class="checkbox__text">Подтверждаю согласие с
                                            <a class="checkbox__link" href="#" target="_blank">
                                                политикой обработки персональных данных</a>
                                        </div>
                                    </label>
                                    <div class="checkbox__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--submit">
                                <button class="button button--primary" type="submit">
                                    <span>Записаться</span>
                                </button>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--response">
                                <div class="form-wide__response"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
