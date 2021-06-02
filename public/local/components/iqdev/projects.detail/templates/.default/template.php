<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
//
//if (empty($arParams)) {
//    return;
//}
?>

<div class="container">
    <?if (!empty($arResult['sectionHeader'])) :?>
        <section class="mb-large">
        <div class="village-header__container js-village-header__container">
            <div class="village-header__image-container js-village-header__image-container">
                <div class="village-header__track" data-glide-el="track">
                    <?if (!empty($arResult['sectionHeader']['slideImages'])) :?>
                        <div class="glide__slides">
                            <?foreach ($arResult['sectionHeader']['slideImages'] as $aItem) :?>
                                <div class="glide__slide">
                                    <div class="village-header__img">
                                        <img src="<?=$aItem?>"/>
                                    </div>
                                </div>
                            <?endforeach?>
                        </div>
                    <?endif?>
                </div>
            </div>
            <div class="village-header__content">
                <div>
                    <div class="village-header__content-top-wrapper">
                        <?if (!empty($arResult['sectionHeader']['logo'])) :?>
                            <div class="village-header__content-logo">
                                <img src="<?=$arResult['sectionHeader']['logo']?>"/>
                            </div>
                        <?endif?>
                        <div class="village-header__content-navigation" data-glide-el="controls[nav]">
                            <button class="village-header__dot" data-glide-dir="=0"></button>
                            <button class="village-header__dot" data-glide-dir="=1"></button>
                            <button class="village-header__dot" data-glide-dir="=2"></button>
                        </div>
                    </div>
                    <h1 class="village-header__title"><?=$arResult['sectionHeader']['title'] ?? ''?></h1>
                    <h2 class="village-header__subtitle"><?=$arResult['sectionHeader']['subtitle'] ?? ''?></h2>
                    <button class="button button--primary village-header__button js-modal-trigger" data-modal-id="visit">
                        <span>Записаться на просмотр</span>
                    </button>
                </div>
            </div>
            <div class="village-header__slider-wrapper">
                <div class="slider-advantages glide js-slider-advantages">
                    <div class="slider-advantages__body">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <?foreach ($arResult['sectionHeader']['advantages'] as $aItem) :?>
                                    <div class="glide__slide">
                                        <div class="slide-advantage">
                                            <div class="slide-advantage__icon">
                                                <img src="/assets/image/icons/lamp_and_square.svg"/>
                                            </div>
                                            <div class="slide-advantage__text"><?=$aItem?></div>
                                        </div>
                                    </div>
                                <?endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal js-modal" data-modal-open="visit">
            <div class="modal__content">
                <div class="modal__title">Записаться на просмотр</div>
                <div class="modal__description">Оставьте контактные данные, и мы вам перезвоним!</div>
                <form class="modal__form js-form" action="/?ajaxAction=formAppointment" data-name="visit">
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
    </section>
    <?endif?>
    <?if (!empty($arResult['villageAbout'])) :?>
        <section class="section mb-large">
            <h2 class="village-about__title">О поселке</h2>
            <div class="village-about__container">
                <div class="village-about__right-wrapper">
                    <div class="village-about__video">
                        <iframe src="https://youtube.com/embed/Ry7c7JFFyzY?rel=0"></iframe>
                    </div>
                    <div class="slide-village slide-village--sand slide-village--hidy">
                        <span class="slide-village__text">
                            <?=$arResult['villageAbout']['textBottomSecond'] ?? ''?>
                        </span>
                    </div>
                </div>
                <div class="village-about__grid">
                    <div class="village-about__wrapper">
                        <div class="slide-village slide-village--green">
                            <span class="slide-village__title">Цены от 550000  <br/> до 1907100 ₽</span>
                            <span class="slide-village__subtitle">Участки от 10 - 12 соток</span>
                        </div>
                        <div class="slide-village__wrapped-item">
                            <div class="slide-village slide-village--blue">
                                <span class="slide-village__text">
                                    <?=$arResult['villageAbout']['textBottom'] ?? ''?>
                                </span>
                            </div>
                            <div class="slide-village slide-village--outline">
                                <ul class="slide-village__list">
                                    <li class="slide-village__list-item slide-village__list-item--lock">
                                        <?=$arResult['villageAbout']['iconLabelFirst'] ?? ''?>
                                    </li>
                                    <li class="slide-village__list-item slide-village__list-item--sand-watches">
                                        <?=$arResult['villageAbout']['iconLabelSecond']?? ''?>
                                    </li>
                                    <li class="slide-village__list-item slide-village__list-item--download">
                                        <?=$arResult['villageAbout']['iconLabelThird'] ?? ''?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slide-village slide-village--sand">
          <span class="slide-village__text">
              <?=$arResult['villageAbout']['textTop'] ?? ''?>
          </span>
                    </div>
                </div>
            </div>
            <div class="village-about__track-container">
                <div class="village-about__track js-village-about__track">
                    <div data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="slide-village slide-village--green">
                                    <span class="slide-village__title">Цены от 550000  <br/> до 1907100 ₽</span>
                                    <span class="slide-village__subtitle">Участки от 10 - 12 соток</span>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="slide-village slide-village--sand">
                                    <span class="slide-village__text">«Альпийская долина» - современный благоустроенный коттеджный поселок, расположенный в экологически чистом районе, <b>в селе Кулига, в 25 км от Тюмени по Ирбитскому тракту</b></span>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="slide-village slide-village--outline">
                                    <ul class="slide-village__list"></ul>
                                    <li class="slide-village__list-item slide-village__list-item--lock">618 продано</li>
                                    <li class="slide-village__list-item slide-village__list-item--sand-watches">8 забронировано</li>
                                    <li class="slide-village__list-item slide-village__list-item--download">228 доступно</li>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="slide-village slide-village--blue">
                                    <span class="slide-village__text">
                                        Минимальная стоимость сотки земельного участка на15.03.2019— 80000 ₽
                                    </span>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="slide-village slide-village--sand">
                <span class="slide-village__text"
                >Поселок отличает природный ландшафт необыкновенной красоты: с холмов открывается живописный вид на лес и реку, а перепады высот в логах составляют до 20 метров!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?endif?>
    <?
    $APPLICATION->IncludeComponent(
        "iqdev:about.village",
        "village",
        [
            'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('our_developed_infrastructure'),
            'IBLOCK_TYPE' => 'content',
            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N'
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
        'iqdev:prciesPlots.slider',
        '.default',
        []
    );
    $APPLICATION->IncludeComponent(
        "iqdev:email.subscribe.main",
        ".default",
    );
    $APPLICATION->IncludeComponent(
        "iqdev:slider.gallery",
        "photo.video",
        []
    );
    ?>
</div>
