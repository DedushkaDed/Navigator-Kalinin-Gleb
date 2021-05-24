<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

//if (empty($arResult)) {
//    return;
//}
$class = \IQDEV\Base\HighLoadBlockManager::getDataManager('Plots');
$d = $class::getList(['limit' => 5])->fetchAll();
//dump($d);
?>
<section class="section mb-medium">
    <div class="container">
        <div class="modal js-modal" data-modal-open="book">
            <div class="modal__content">
                <div class="modal__title">Забронировать участок</div>
                <div class="modal__description"></div>
                <div class="modal__info">
                    <div class="modal__info-wrapper">
                        <div class="modal__info-title" data-modal-import="districtName"></div>
                        <div class="modal__info-subtitle" data-modal-import="houseNum"></div>
                    </div>
                </div>
                <form class="modal__form js-form" action="/?ajaxAction=bookArea" data-name="book">
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="name" placeholder="Имя" data-validate="required,name"/>
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="phone" name="number" placeholder="Телефон"
                                   data-validate="required,phone" data-masking="phone"
                            />
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <input type="hidden" name="id" data-modal-import="id"/>
                    <div class="modal__checkbox">
                        <div class="checkbox js-checkbox">
                            <label class="checkbox__label">
                                <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                <div class="checkbox__custom checkbox__custom--border"></div>
                                <div class="checkbox__text">Подтверждаю согласие с
                                    <a class="checkbox__link" href="#" target="_blank"> политикой обработки персональных данных</a>
                                </div>
                            </label>
                            <div class="checkbox__error"></div>
                        </div>
                    </div>
                    <div class="modal__response"></div>
                    <div class="modal__button">
                        <button class="button button--primary" type="submit">
                            <span>Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="js-village-map-table" id="areachooser" data-filters="data-filters"></div>
    </div>
</section>
