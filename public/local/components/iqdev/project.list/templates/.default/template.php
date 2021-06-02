<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>
<section class="section mb-medium">
    <div class="container">
        <div class="gridster">
            <?foreach ($arResult as $aItem) :?>
                <div class="gridster__item">
                    <a class="card" href="<?=$aItem['code'] ?? ''?>">
                        <div class="card__image" style="background-image: url(<?=$aItem['image'] ?? ''?>)">
                            <div class="card__logo-inner">
                                <div class="card__logo" style="background-image:
                                 url(<?=$aItem['logo'] ?? ''?>)">
                                </div>
                            </div>
                            <div class="card__name"><?=$aItem['title'] ?? ''?></div>
                        </div>
                        <div class="card__content">
                            <div class="card__location"><?=$aItem['description'] ?? ''?></div>
                            <div class="card__list">
                                <div class="card__list-item card__list-item--sale">
                                    <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2857 6.18701H0V17.1861H14.2857V6.18701Z" fill="#7EC95C"></path>
                                        <path
                                            d="M9.28571 10.9991C9.28571 9.86003 8.32643 8.9368 7.14286 8.9368C5.95929 8.9368 5 9.86003 5 10.9991C5 11.9045 5.61 12.6655 6.45357 12.9425C6.44571 12.9824 6.42857 13.0195 6.42857 13.0614V14.4363C6.42857 14.8158 6.74857 15.1237 7.14286 15.1237C7.53714 15.1237 7.85714 14.8158 7.85714 14.4363V13.0614C7.85714 13.0195 7.84 12.9824 7.83214 12.9425C8.67571 12.6655 9.28571 11.9045 9.28571 10.9991Z"
                                            fill="#48AD19"
                                        ></path>
                                        <path
                                            d="M3.57142 4.8121C3.57142 2.91682 5.17357 1.37489 7.14285 1.37489C9.11214 1.37489 10.7143 2.91682 10.7143 4.8121V6.18699H12.1429V4.8121C12.1429 2.15857 9.9 0 7.14285 0C4.38571 0 2.14285 2.15857 2.14285 4.8121V6.18699H3.57142V4.8121Z"
                                            fill="#48AD19"
                                        ></path>
                                    </svg>
                                    <span><?=$aItem['iconLabelFirst'] ?? ''?></span>
                                </div>
                                <div class="card__list-item card__list-item--reserved">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.79217 7.97784H6.49347C4.13439 7.13415 2.59738 5.15529 2.59738 2.961V1.01001H11.6883V2.961C11.6883 5.15529 10.1513 7.13415 7.79217 7.97784Z"
                                            fill="#7EC95C"
                                        ></path>
                                        <path
                                            d="M6.49347 7.97708H7.79217C10.1513 8.82078 11.6883 10.7997 11.6883 12.994V14.945H2.59738V12.994C2.59738 10.7997 4.13439 8.82078 6.49347 7.97708Z"
                                            fill="#7EC95C"
                                        ></path>
                                        <path
                                            d="M0.649351 1.59015H1.2987H2.5974H13.6364C13.9955 1.59015 14.2857 1.32995 14.2857 1.00935C14.2857 0.688755 13.9955 0.428558 13.6364 0.428558H2.5974H1.2987H0.649351C0.29026 0.428558 0 0.688755 0 1.00935C0 1.32995 0.29026 1.59015 0.649351 1.59015Z"
                                            fill="#48AD19"
                                        ></path>
                                        <path
                                            d="M13.6357 14.3632H1.9474C1.94545 14.3632 1.9435 14.3644 1.94091 14.3644H0.64935C0.29026 14.3644 0 14.6246 0 14.9452C0 15.2658 0.29026 15.526 0.64935 15.526H2.5974C2.59935 15.526 2.6013 15.5248 2.60389 15.5248H13.6357C13.9948 15.5248 14.2851 15.2646 14.2851 14.944C14.2851 14.6234 13.9948 14.3632 13.6357 14.3632Z"
                                            fill="#48AD19"
                                        ></path>
                                    </svg>
                                    <span><?=$aItem['iconLabelSecond'] ?? ''?></span>
                                </div>
                                <div class="card__list-item card__list-item--access">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="7.14286" cy="7.85715" r="7.14286" fill="#7EC95C"></circle>
                                        <path d="M7.60502 3.57144H6.59663V11.0232H7.60502V3.57144Z" fill="#48AD19"></path>
                                        <path
                                            d="M7.10084 11.4889L3.57144 8.41172L4.31564 7.76297L7.10084 10.1914L9.88604 7.76297L10.6302 8.41172L7.10084 11.4889Z"
                                            fill="#48AD19"
                                        ></path>
                                    </svg>
                                    <span><?=$aItem['iconLabelThird'] ?? ''?></span>
                                </div>
                            </div>
                        </div>
                        <div class="card__footer">
                            <div class="card__spot"><?=$aItem['buttonLabel'] ?? ''?></div>
                            <div class="card__button">
                                <div class="arrow-link arrow-link--right">
                                    <div class="arrow-link__border">
                                        <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806 6.48226 47 1.5 47"
                                                stroke="#6BBD45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                            ></path>
                                        </svg>
                                    </div>
                                    <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431 0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457 10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z"
                                            fill="#6BBD45 "
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?endforeach?>
            <div class="gridster__item gridster__item--calc">
                <div class="local-filter">
                    <div class="local-filter__title">Выберите свой участок</div>
                    <form class="local-filter__grid filter-slider" action="/ceni-na-zemelnie-uchastki/" method="GET">
                        <div class="local-filter__grid-item">
                            <div class="local-filter__slider">
                                <div class="local-filter__slider-item">
                                    <div class="filter-slider__slider-name">Стоимость</div>
                                    <div class="input-slider js-input-slider" data-min="380000" data-max="3000000"
                                         data-labels="[&quot;₽&quot;,&quot;₽&quot;,&quot;₽&quot;]"
                                    >
                                        <input class="input-slider__input" type="hidden" name="cost"/>
                                        <div class="input-slider__slider"></div>
                                        <div class="input-slider__results">
                                            <div class="filter-slider__result"></div>
                                            <div class="filter-slider__result"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="local-filter__slider-item">
                                    <div class="filter-slider__slider-name">Размер участка</div>
                                    <div class="input-slider js-input-slider" data-min="5" data-max="30"
                                         data-labels="[&quot;сотка&quot;,&quot;сотки&quot;,&quot;соток&quot;]"
                                    >
                                        <input class="input-slider__input" type="hidden" name="area"/>
                                        <div class="input-slider__slider"></div>
                                        <div class="input-slider__results">
                                            <div class="filter-slider__result"></div>
                                            <div class="filter-slider__result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="local-filter__grid-item">
                            <div class="local-filter__checkbox-title">Коттеджный поселок</div>
                            <div class="local-filter__checkbox">
                                <div class="checkbox">
                                    <label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" name="checkbox" value="1" checked="checked"/>
                                        <div class="checkbox__custom"></div>
                                        <div class="checkbox__text">Есенино</div>
                                    </label>
                                </div>
                            </div>
                            <div class="local-filter__checkbox">
                                <div class="checkbox">
                                    <label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" name="checkbox" value="2" checked="checked"/>
                                        <div class="checkbox__custom"></div>
                                        <div class="checkbox__text">Елки</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="local-filter__grid-item">
                            <div class="local-filter__button">
                                <button class="button button--primary" type="submit">
                                    <span>Подобрать участок</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
