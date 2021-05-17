<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    "iqdev:ok.static.text",
    "services",
    []
);
$APPLICATION->IncludeComponent(
    "iqdev:ok.static.text",
    "permanent.services",
    []
);
$APPLICATION->IncludeComponent(
    "iqdev:ok.news.list",
    "cards",
    [
        "IBLOCK_ID" => IQDEV\Base\Helper::getIblockId('permanent_services_content'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    ]
);
?>
<section class="section mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <span>Дополнительные услуги</span>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text"
                >Нет времени искать подрядчика самостоятельно? Не хотите столкнуться с недобросовестным исполнителем? Мы готовы предложить перечень услуг, которые вы можете заказать у нас за дополнительную оплату.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="js-additional-services"></div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="section-header">Как работает обслуживающая компания «Навигатор-Сервис?»</div>
        <div class="work-stage-container">
            <div class="work-stage">
                <div class="work-stage__index">1</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/1.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Покупка участка</div>
                    <div class="work-stage__description"
                    >Вы покупаете земельный участок в девелоперской компании «Навигатор».
                    </div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">2</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/2.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Заключение договора</div>
                    <div class="work-stage__description">Вы заключаете договор с обслуживающей компанией «Навигатор-Сервис».</div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">3</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/3.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Постоянные услуги</div>
                    <div class="work-stage__description"
                    >Стоимость услуг включена в счет, зависит от площади земельного участка.
                    </div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">4</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/4.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Дополнительные услуги</div>
                    <div class="work-stage__description"
                    >Стоимость услуг рассчитывается индивидуально, оплачивается дополнительно.
                    </div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">5</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/5.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Совет собственников</div>
                    <div class="work-stage__description"
                    >Избирается на основании заявлений, представляет интересы собственников земельных участков.
                    </div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">6</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/6.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Отчётность</div>
                    <div class="work-stage__description"
                    >Ежеквартальные отчеты о деятельности обслуживающей компании публикуем на сайте, рассылаем по e-mail.
                    </div>
                </div>
            </div>
            <div class="work-stage">
                <div class="work-stage__index">7</div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="/assets/image/obsluzhivayuschaya-kompaniya/7.svg"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title">Открытость</div>
                    <div class="work-stage__description">Мы всегда открыты к обсуждению важных для вас вопросов.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--ok form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text form-wide__text--vertical-md">
                            <div class="form-wide__title">Задайте вопрос обслуживающей компании!</div>
                            <div class="form-wide__description">Заполните форму ниже, и мы вам перезвоним</div>
                        </div>
                        <form class="form-wide__form form-wide__form--ok js-form" action="/?ajaxAction=formQuestionService"
                              data-name="wide-question"
                        >
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="name" placeholder="Имя" data-validate="required,name"/>
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
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input">
                                    <input class="input__field" type="text" name="email" placeholder="Почта"
                                           data-validate="required,email"
                                    />
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-items-group">
                                <div class="form-wide__form-item form-wide__form-item--select form-wide__form-item--field">
                                    <select class="select js-select" id="select" data-placeholder="Название посёлка">
                                        <option data-placeholder="true"></option>
                                        <option value="Альпийская долина">Альпийская долина</option>
                                        <option value="Есенино">Есенино</option>
                                        <option value="Ёлки">Ёлки</option>
                                        <option value="Ушаково">Ушаково</option>
                                    </select>
                                    <div class="select__error"></div>
                                </div>
                                <div class="form-wide__form-item form-wide__form-item--number form-wide__form-item--field">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="areaNumber" placeholder="№ участка"
                                               data-validate="required"
                                        />
                                        <div class="input__error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--textarea form-wide__form-item--field">
                <textarea class="modal__textarea js-textarea" placeholder="Вопрос" name="question"
                          data-validate="required"
                ></textarea>
                                <div class="input__error"></div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--policy">
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
                            <div class="form-wide__form-item form-wide__form-item--submit">
                                <button class="button button--primary" type="submit">
                                    <span>Отправить</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden pb-large">
    <div class="container">
        <div class="section-header">Новости и отзывы обслуживающей компании</div>
        <div class="tabs js-tabs">
            <div class="tabs__inner tabs__inner--offset">
                <div class="tabs-navigation js-tabs-navigation">
                    <div class="tabs-navigation__active"></div>
                    <div class="tabs-navigation__item active" data-tab="news">Новости</div>
                    <div class="tabs-navigation__item" data-tab="reviews">Отзывы</div>
                </div>
            </div>
            <div class="tabs__contents">
                <div class="tabs__content js-tabs__content active" data-tab-content="news">
                    <div class="slider glide js-slider">
                        <div class="slider__body">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    <div class="glide__slide">
                                        <a class="news-card" href="#">
                                            <div class="news-card__image">
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                                     alt="Итоги зимнего праздника в «Альпийской долине»"
                                                />
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text"
                                                >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="glide__slide">
                                        <a class="news-card" href="#">
                                            <div class="news-card__image">
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                                     alt="Итоги зимнего праздника в «Альпийской долине»"
                                                />
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text"
                                                >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="glide__slide">
                                        <a class="news-card" href="#">
                                            <div class="news-card__image">
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                                     alt="Итоги зимнего праздника в «Альпийской долине»"
                                                />
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text"
                                                >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="glide__slide">
                                        <a class="news-card" href="#">
                                            <div class="news-card__image">
                                                <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/avtoshkola.jpg"
                                                     alt="Итоги зимнего праздника в «Альпийской долине»"
                                                />
                                            </div>
                                            <div class="news-card__content">
                                                <div class="news-card__title">Итоги зимнего праздника в «Альпийской долине»</div>
                                                <div class="news-card__text"
                                                >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                </div>
                                                <div class="news-card__wrapper">
                                                    <div class="news-card__link">Читать далее</div>
                                                    <span class="news-card__date">4.03.2019</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__arrows">
                            <div class="slider-controls">
                                <div data-glide-el="controls">
                                    <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                                fill="#D1D1D1"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                                    <li class="glide__bullet" data-glide-dir="=0">0</li>
                                    <li class="glide__bullet" data-glide-dir="=1">1</li>
                                    <li class="glide__bullet" data-glide-dir="=2">2</li>
                                    <li class="glide__bullet" data-glide-dir="=3">3</li>
                                </ul>
                                <div data-glide-el="controls">
                                    <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                                fill="#D1D1D1"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs__content js-tabs__content" data-tab-content="reviews">
                    <div class="slider glide js-slider">
                        <div class="slider__body">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    <div class="glide__slide">
                                        <div style="display: none">
                                            <div class="modal-review js-modal-review" data-modal-open="review1">
                                                <div class="modal-review__inner">
                                                    <div class="modal-review__photo">
                                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"/>
                                                    </div>
                                                    <div class="modal-review__content">
                                                        <div class="modal-review__content-title">Андрей</div>
                                                        <div class="modal-review__content-location">коттеджный посёлок «Альпийская долина»</div>
                                                        <div class="modal-review__content-text"
                                                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                        </div>
                                                        <a class="review-card__link" href="#" target="_blank">Оригинал отзыва</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-card">
                                            <div class="review-card__header">
                                                <div class="review-card__image">
                                                    <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                                </div>
                                                <div class="review-card__title-wrapper">
                                                    <div class="review-card__title">Андрей</div>
                                                    <div class="review-card__location">коттеджный посёлок «Альпийская долина»</div>
                                                </div>
                                            </div>
                                            <div class="review-card__content">
                        <span class="review-card__text js-modal-trigger" data-modal-id="review1"
                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников</span>
                                            </div>
                                            <a class="review-card__link" href="#" target="_blank" rel="noopener noreferrer"
                                            >Оригинал отзыва
                                            </a>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div style="display: none">
                                            <div class="modal-review js-modal-review" data-modal-open="review2">
                                                <div class="modal-review__inner">
                                                    <div class="modal-review__photo">
                                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"/>
                                                    </div>
                                                    <div class="modal-review__content">
                                                        <div class="modal-review__content-title">Андрей</div>
                                                        <div class="modal-review__content-location">коттеджный посёлок «Альпийская долина»</div>
                                                        <div class="modal-review__content-text"
                                                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                        </div>
                                                        <a class="review-card__link" href="#" target="_blank">Оригинал отзыва</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-card">
                                            <div class="review-card__header">
                                                <div class="review-card__image">
                                                    <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                                </div>
                                                <div class="review-card__title-wrapper">
                                                    <div class="review-card__title">Андрей</div>
                                                    <div class="review-card__location">коттеджный посёлок «Альпийская долина»</div>
                                                </div>
                                            </div>
                                            <div class="review-card__content">
                        <span class="review-card__text js-modal-trigger" data-modal-id="review2"
                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников</span>
                                            </div>
                                            <a class="review-card__link" href="#" target="_blank" rel="noopener noreferrer"
                                            >Оригинал отзыва
                                            </a>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div style="display: none">
                                            <div class="modal-review js-modal-review" data-modal-open="review3">
                                                <div class="modal-review__inner">
                                                    <div class="modal-review__photo">
                                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"/>
                                                    </div>
                                                    <div class="modal-review__content">
                                                        <div class="modal-review__content-title">Андрей</div>
                                                        <div class="modal-review__content-location">коттеджный посёлок «Альпийская долина»</div>
                                                        <div class="modal-review__content-text"
                                                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                        </div>
                                                        <a class="review-card__link" href="#" target="_blank">Оригинал отзыва</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-card">
                                            <div class="review-card__header">
                                                <div class="review-card__image">
                                                    <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                                </div>
                                                <div class="review-card__title-wrapper">
                                                    <div class="review-card__title">Андрей</div>
                                                    <div class="review-card__location">коттеджный посёлок «Альпийская долина»</div>
                                                </div>
                                            </div>
                                            <div class="review-card__content">
                        <span class="review-card__text js-modal-trigger" data-modal-id="review3"
                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников</span>
                                            </div>
                                            <a class="review-card__link" href="#" target="_blank" rel="noopener noreferrer"
                                            >Оригинал отзыва
                                            </a>
                                        </div>
                                    </div>
                                    <div class="glide__slide">
                                        <div style="display: none">
                                            <div class="modal-review js-modal-review" data-modal-open="review4">
                                                <div class="modal-review__inner">
                                                    <div class="modal-review__photo">
                                                        <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png"/>
                                                    </div>
                                                    <div class="modal-review__content">
                                                        <div class="modal-review__content-title">Андрей</div>
                                                        <div class="modal-review__content-location">коттеджный посёлок «Альпийская долина»</div>
                                                        <div class="modal-review__content-text"
                                                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников
                                                        </div>
                                                        <a class="review-card__link" href="#" target="_blank">Оригинал отзыва</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-card">
                                            <div class="review-card__header">
                                                <div class="review-card__image">
                                                    <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/andrey.png" alt="Андрей"/>
                                                </div>
                                                <div class="review-card__title-wrapper">
                                                    <div class="review-card__title">Андрей</div>
                                                    <div class="review-card__location">коттеджный посёлок «Альпийская долина»</div>
                                                </div>
                                            </div>
                                            <div class="review-card__content">
                        <span class="review-card__text js-modal-trigger" data-modal-id="review4"
                        >Вот и наступила Масленичная неделя — праздник, справедливо считающийся одним из самых «кулинарных» праздников</span>
                                            </div>
                                            <a class="review-card__link" href="#" target="_blank" rel="noopener noreferrer"
                                            >Оригинал отзыва
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__arrows">
                            <div class="slider-controls">
                                <div data-glide-el="controls">
                                    <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                                fill="#D1D1D1"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                                    <li class="glide__bullet" data-glide-dir="=0">0</li>
                                    <li class="glide__bullet" data-glide-dir="=1">1</li>
                                    <li class="glide__bullet" data-glide-dir="=2">2</li>
                                    <li class="glide__bullet" data-glide-dir="=3">3</li>
                                </ul>
                                <div data-glide-el="controls">
                                    <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                                fill="#D1D1D1"
                                            ></path>
                                        </svg>
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
<section class="section mb-medium">
    <div class="container">
        <div class="section-header">Ответы на частые вопросы</div>
        <div class="accordion-container js-accordion accordion-container--show-more">
            <div class="accordion accordion--sand">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >1. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >2. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion accordion--sand">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >3. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >4. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion accordion--sand">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >5. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion__header">
                    <div class="accordion__header-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path
                                d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                            ></path>
                        </svg>
                    </div>
                    <div class="accordion__header-text">
                        <div class="accordion__header-text-primary"
                        >6. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                        </div>
                    </div>
                </div>
                <div class="accordion__body" style="display: none">
                    <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                    <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                </div>
            </div>
            <div class="accordion-container__expand">
                <div class="expand js-expand">
                    <div class="expand__collapse" style="display:none;">
                        <div class="accordion accordion--sand">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text">
                                    <div class="accordion__header-text-primary"
                                    >7. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                                <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text">
                                    <div class="accordion__header-text-primary"
                                    >8. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                                <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                            </div>
                        </div>
                        <div class="accordion accordion--sand">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                                        <path
                                            d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261 4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text">
                                    <div class="accordion__header-text-primary"
                                    >9. Хочу начать строить забор. Можно ли узнать телефоны соседей?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body" style="display: none">
                                <p>Номера телефонов, адреса и другие контактные данные о жителях, относятся к персональным данным. Соответственно, мы не имеем право ее предоставлять. Для знакомства и общения у нас созданы группы в социальных сетях, где Вы можете найти своих соседей, договориться о встречах, узнать много полезной информации.</p>
                                <p>Для вашего удобства мы публикуем адреса наших официальных страниц и групп, где наши покупатели с легкостью находят друг друга, и общаются по важным для них вопросам. Ссылки на наши группы можно найти на сайте "Навигатор" в разделе Новости</p>
                            </div>
                        </div>
                    </div>
                    <div class="expand__a">
                        <div class="expand__b">
                            <div class="expand__button">
                                <div class="arrow-link arrow-link--bottom">
                                    <div class="arrow-link__border">
                                        <svg viewBox="0 0 49 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M47 1.5C47 13.9264 36.9264 24 24.5 24C18.476 24 13.0049 21.6326 8.96629 17.7775C8.01424 16.8686 7.1418 15.8771 6.36049 14.8145C3.61938 11.0863 2 6.48226 2 1.5"
                                                stroke="#6BBD45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                            ></path>
                                        </svg>
                                    </div>
                                    <svg class="arrow-link__arrow" width="15" height="19" viewBox="0 0 15 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711 18.2071L14.5711 11.8431C14.9616 11.4526 14.9616 10.8195 14.5711 10.4289C14.1805 10.0384 13.5474 10.0384 13.1569 10.4289L7.5 16.0858L1.84315 10.4289C1.45262 10.0384 0.819456 10.0384 0.428932 10.4289C0.0384074 10.8195 0.0384073 11.4526 0.428932 11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z"
                                            fill="#6BBD45"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header">Контакты</div>
        <div class="glide contacts-persons js-contacts-persons">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="contacts-person contacts-person--slider">
                            <div class="contacts-person__photo" style="background-image:url(http://placehold.it/400x300);"></div>
                            <div class="contacts-person__content">
                                <div class="contacts-person__name">Высоцкий Сергей Дмитриевич</div>
                                <div class="contacts-person__position">Управляющий коттеджными поселками</div>
                                <ul class="contacts-person__contact-group">
                                    <li>+7-929-269-23-82</li>
                                    <li>+7 (3452) 602-382</li>
                                </ul>
                                <ul class="contacts-person__contact-group">
                                    <li>service@navigator-tmn.ru</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="contacts-person contacts-person--slider">
                            <div class="contacts-person__photo" style="background-image:url(http://placehold.it/400x300);"></div>
                            <div class="contacts-person__content">
                                <div class="contacts-person__name">Чичканова Анита Эдуардовна</div>
                                <div class="contacts-person__position">Начальник отдела клиентского сервиса</div>
                                <ul class="contacts-person__contact-group">
                                    <li>+7 (3452) 565-705</li>
                                    <li>+7 (3452) 565-787 (внутренний 325)</li>
                                    <li>+7 929 266 94 35 (Viber)</li>
                                </ul>
                                <ul class="contacts-person__contact-group">
                                    <li>aeo@navigator-tmn.ru</li>
                                    <li>service@navigator-tmn.ru</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contacts-table">
            <div class="contacts-table-group">
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">Бухгалтерия</div>
                    <div class="contacts-table-group__value">+ 7 (3452) 565-787 (внутренний 301)</div>
                </div>
                <div class="contacts-table-group__divider"></div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">КПП 1 «Альпийская долина» (1 очередь)</div>
                    <div class="contacts-table-group__value">+ 7 922 268 76 52</div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">КПП 2 «Альпийская долина» (3 очередь)</div>
                    <div class="contacts-table-group__value">+ 7 922 268 76 56</div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">КПП «Ёлки»</div>
                    <div class="contacts-table-group__value">+ 7 932 484 15 30</div>
                </div>
                <div class="contacts-table-group__divider"></div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">Совет собственников «Альпийская долина» (1 очередь)</div>
                    <div class="contacts-table-group__value">ssad1@navigator-tmn.ru</div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">Совет собственников «Ушаково»</div>
                    <div class="contacts-table-group__value">ssus@navigator-tmn.ru</div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name">Совет собственников «Есенино»</div>
                    <div class="contacts-table-group__value">sses@navigator-tmn.ru</div>
                </div>
            </div>
            <div class="contacts-table-map js-contacts-table-map js-tabs">
                <div class="contacts-table-map__navigation">
                    <div class="tabs-navigation js-tabs-navigation">
                        <div class="tabs-navigation__active"></div>
                        <div class="tabs-navigation__item active" data-tab="offices">Офис компании Навигатор</div>
                        <div class="tabs-navigation__item" data-tab="alpine">Офис в Альпийской Долине</div>
                    </div>
                </div>
                <div class="tabs__contents">
                    <div class="tabs__content js-tabs__content active" data-tab-content="offices">
                        <div class="contacts-table-map__note">График приема посетилелей:
                            <b>Четверг с 10:00 до 18:00</b>
                        </div>
                    </div>
                    <div class="tabs__content js-tabs__content" data-tab-content="alpine">
                        <div class="contacts-table-map__note">График приема посетилелей:
                            <b>Пятница с 11:00 до 21:00</b>
                        </div>
                    </div>
                </div>
                <div class="contacts-table-map__map" style="width: 100%; height: 100%"></div>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
