<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'iqdev:projects',
    '.default',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('plats_project'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);
?>
<div class="village-map__container">
        <div class="village-map">
            <h2 class="village-map__title">Карта посёлка</h2>
            <div class="village-map__map-box__container">
                <div class="village-map__map-box" id="mapchooser" data-village="AlpDol72"
                     data-logo="/assets/image/logo/alpine.svg"
                ></div>
            </div>
            <a href="#" target="_blank">
                <div class="village-map__banner">
                    <div class="village-map__banner-logo">
                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/rosrestr.jpg"/>
                    </div>
                    <div class="village-map__banner-link">
                        <div class="village-map__banner__filter">
                            <div class="village-map__banner-content">Смотреть кадастровую карту посёлка</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <script async="async" src="/assets/js/map.js"></script>
        <link rel="stylesheet" href="/assets/css/map.css"/>
        <div class="modal js-modal" data-modal-open="visitWithId">
            <div class="modal__content">
                <div class="modal__title">Записаться на просмотр</div>
                <div class="modal__description">Оставьте контактные данные, и мы вам перезвоним!</div>
                <form class="modal__form js-form" action="/?ajaxAction=formAppointment" data-name="visitWithId">
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="name" placeholder="Имя" data-validate="required,name"/>
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <div class="modal__input">
                        <input type="hidden" name="id" data-modal-import="id"/>
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
    </div>
<?php
$APPLICATION->IncludeComponent(
    'iqdev:projects.accordion',
    '.default',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('choose_cottage_village'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
