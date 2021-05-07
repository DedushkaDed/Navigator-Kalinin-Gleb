<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>
<?php $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "navigation_tabs",
    [
        "ALLOW_MULTI_SELECT" => "N",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_USE_GROUPS" => "N",
        "ROOT_MENU_TYPE" => "subtop",
        "USE_EXT" => "Y",
        "COMPONENT_TEMPLATE" => "navigation_tabs",
    ],
    false
); ?>

    <section class="section mt-medium mb-medium">
        <div class="container">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title">
                    <h1>Рассрочка без процентов</h1>
                </div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text"
                    >Мы всегда идем навстречу клиентам, предоставляя возможность купить земельный участок в Тюмени в благоустроенных и красивых коттеджных поселках в рассрочку на самых выгодных условиях.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mb-medium">
        <div class="container">
            <div class="work-stage-container">
                <div class="work-stage">
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="/assets/image/work-stages/rassrochka/1.svg"/>
                        </div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title">Выгодно</div>
                        <div class="work-stage__description">0% без переплат
                            <br>
                            до 12 месяцев
                        </div>
                    </div>
                </div>
                <div class="work-stage">
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="/assets/image/work-stages/rassrochka/2.svg"/>
                        </div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title">Удобно</div>
                        <div class="work-stage__description">Первоначальный платеж
                            <br>
                            от 30 000 рублей
                        </div>
                    </div>
                </div>
                <div class="work-stage">
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="/assets/image/work-stages/rassrochka/3.svg"/>
                        </div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title">Гарантированно</div>
                        <div class="work-stage__description">Предварительное
                            <br>
                            одобрение 100%
                        </div>
                    </div>
                </div>
                <div class="work-stage">
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="/assets/image/work-stages/rassrochka/4.svg"/>
                        </div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title">Эксклюзивно</div>
                        <div class="work-stage__description">Индивидуальное
                            <br>
                            обсуждение условий
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--overflow-hidden mt-medium mb-large">
        <div class="container">
            <div class="section-header">Почему покупать земельный участок в рассрочку выгодно?</div>
            <div class="grid-unit">
                <div class="grid-unit__inner">
                    <div class="grid-unit__item grid-unit__item--banner grid-unit__item--col2">
                        <div class="grid-card grid-card--xs-border-radius">
                            <div class="grid-card__text">Вы оплачиваете земельный участок по частям,
                                <br>
                                в индивидуально согласованные периоды
                            </div>
                            <div class="grid-card__image-wrapper">
                                <img src="http://placehold.it/1920x800"/>
                            </div>
                        </div>
                    </div>
                    <div class="grid-unit__item">
                        <div class="card-color card-color--blue">
                            <div class="card-color__text card-color__text--grow"
                            >В такой форме расчета отсутствуют проценты, что категорически отличается от кредита
                            </div>
                            <div class="card-color__subcontent">
                                <div class="circle-percent circle-percent--background-dark-blue">0%</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-unit__item">
                        <div class="card-color card-color--gray">
                            <div class="card-color__text card-color__text--grow"
                            >Вам не нужно платить всю сумму за выбранный земельный участок
                            </div>
                        </div>
                    </div>
                    <div class="grid-unit__item">
                        <div class="card-color card-color--green">
                            <div class="card-color__text card-color__text--grow"
                            >Незамедлительное оформление документов и отсутствие залоговых средств
                            </div>
                        </div>
                    </div>
                    <div class="grid-unit__item">
                        <div class="card-color card-color--gray">
                            <div class="card-color__text card-color__text--grow"
                            >Чтобы оформить покупку земельного участка от покупателя требуется только паспорт
                            </div>
                        </div>
                    </div>
                    <div class="grid-unit__item grid-unit__item--col2">
                        <div class="card-color card-color--border card-color--center">
                            <div class="card-color__grid">
                                <div>Вы можете получить индивидуальное предложение о рассрочке!</div>
                                <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                    <div class="button button--primary">
                                        <span>Получить консультацию</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Контент дублируется для мобильного слайдера-->
                    <div class="grid-unit-mobile-slider grid-unit-mobile-slider--offset-top js-grid-unit-mobile-slider">
                        <div class="grid-unit-mobile-slider__track" data-glide-el="track">
                            <div class="grid-unit-mobile-slider__carousel">
                                <div class="grid-unit__mobile-item">
                                    <div class="card-color card-color--blue">
                                        <div class="card-color__text card-color__text--grow"
                                        >В такой форме расчета отсутствуют проценты, что категорически отличается от кредита
                                        </div>
                                        <div class="card-color__subcontent">
                                            <div class="circle-percent circle-percent--background-dark-blue">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-unit__mobile-item">
                                    <div class="card-color card-color--gray">
                                        <div class="card-color__text card-color__text--grow"
                                        >Вам не нужно платить всю сумму за выбранный земельный участок
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-unit__mobile-item">
                                    <div class="card-color card-color--green">
                                        <div class="card-color__text card-color__text--grow"
                                        >Незамедлительное оформление документов и отсутствие залоговых средств
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-unit__mobile-item">
                                    <div class="card-color card-color--gray">
                                        <div class="card-color__text card-color__text--grow"
                                        >Чтобы оформить покупку земельного участка от покупателя требуется только паспорт
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-unit__mobile-item">
                                    <div class="card-color card-color--border card-color--center">
                                        <div class="card-color__grid">
                                            <div>Вы можете получить индивидуальное предложение о рассрочке!</div>
                                            <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                                <div class="button button--primary">
                                                    <span>Получить консультацию</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');