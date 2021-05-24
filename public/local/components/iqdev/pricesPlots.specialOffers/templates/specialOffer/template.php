<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arParams)) {
    return;
}
?>
<section class="section mb-large">
    <div class="container">
        <div class="modal js-modal" data-modal-open="investment">
            <div class="modal__content">
                <div class="modal__title">Инвестировать в землю</div>
                <div class="modal__description"
                >Оставьте свои контакты и эксперт по недвижимости бесплатно проконсультирует вас по выгодным вариантам инвестирования капитала
                </div>
                <form class="modal__form js-form" action="/?ajaxAction=formInvestment" data-name="investment">
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="name" placeholder="Имя" data-validate="required,name"/>
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="phone" placeholder="Телефон" data-validate="required,phone"
                                   data-masking="phone"
                            />
                            <div class="input__error"></div>
                        </div>
                    </div>
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
        <div class="row__container">
            <div class="row__left">
                <h2 class="row__title">Предложение от компании «Навигатор»</h2>
                <div class="row__text">
                    <?=$arParams['specialOfferText'] ?? ''?>
                </div>
                <button class="row__button button button--primary js-modal-trigger" data-modal-id="investment">
                    <span>Узнать подробнее</span>
                </button>
            </div>
            <div class="row__right">
                <img class="row__image" src="<?=$arParams['specialOfferImage'] ?? ''?>"/>
            </div>
        </div>
    </div>
</section>