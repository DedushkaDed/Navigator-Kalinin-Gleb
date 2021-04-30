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

if (empty($arResult['ITEMS'])) {
    return;
}
//dump($arResult['ITEMS']);?>

<section class="section mb-large">
    <div class="container">
        <div class="section-header">Почему стоит работать у нас?</div>
        <?php foreach($arResult['ITEMS'] as $aItem) :?>
            <div class="vacancy-description">
                <div class="vacancy-description__item vacancy-description__item--gallery">
                    <div class="vacancy-description-gallery js-vacancy-description-gallery">
                        <div class="vacancy-description-gallery__image">
                            <img/>
                        </div>
                        <div class="vacancy-description-gallery__slider <?=$aItem['PROPERTIES']['contentPosition']?>">
                            <div class="glide">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
<!--                                        --><?php //foreach ($aItem['IMAGE_CONTENT']['FILE_VALUE'] as $aImage):?>
                                        <li class="glide__slide">
<!--                                            --><?//dump($aImage);?>
<!--                                            <img src="--><?//=$aImage['SRC']?><!--" data-index="--><?//=$aImage['ID']?><!--"/>-->
                                        </li>
<!--                                        --><?//endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vacancy-description__item vacancy-description__item--text">
                    <div class="vacancy-description-text">
                        <div class="vacancy-description-text__title">Комфортные условия</div>
                        <div class="vacancy-description-text__text-blocks">
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">Новый дизайнерский офис</div>
                                <div class="vacancy-description-text__text-block-text"
                                >Новый и стильный офис, разработанный ведущими дизайнерами города, с потрясающим видом на реку.
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title"
                                >Комфортное рабочее место с большим личным пространством
                                </div>
                                <div class="vacancy-description-text__text-block-text"
                                >Каждый сотрудник компании имеет эргономичное рабочее место, оснащенное всем необходимым для удобной и продуктивной работы.
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">Свободные парковочные места</div>
                                <div class="vacancy-description-text__text-block-text"
                                >Около офиса располагается парковка для автомобилей со свободными парковочными местами.
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title">Живописный вид на набережную</div>
                                <div class="vacancy-description-text__text-block-text"
                                >Офис компании расположен в историческом центре города, рядом с главной точкой притяжения для всех жителей и гостей – современной и красивой набережной.
                                </div>
                            </div>
                            <div class="vacancy-description-text__text-block">
                                <div class="vacancy-description-text__text-block-title"
                                >Программа лояльности на покупку земельного участка
                                </div>
                                <div class="vacancy-description-text__text-block-text"
                                >Сотрудники компании имеют возможность купить земельный участок по выгодной цене в соответствии с опытом работы в компании.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
<!--        <div class="vacancy-description">-->
<!--            <div class="vacancy-description__item vacancy-description__item--gallery">-->
<!--                <div class="vacancy-description-gallery js-vacancy-description-gallery">-->
<!--                    <div class="vacancy-description-gallery__image">-->
<!--                        <img/>-->
<!--                    </div>-->
<!--                    <div class="vacancy-description-gallery__slider vacancy-description-gallery__slider--right">-->
<!--                        <div class="glide">-->
<!--                            <div class="glide__track" data-glide-el="track">-->
<!--                                <ul class="glide__slides">-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x204" data-index="0"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x205" data-index="1"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x206" data-index="2"/>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="vacancy-description__item vacancy-description__item--text">-->
<!--                <div class="vacancy-description-text">-->
<!--                    <div class="vacancy-description-text__title">Постоянное развитие</div>-->
<!--                    <div class="vacancy-description-text__text-blocks">-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">План саморазвития у каждого сотрудника</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Сотрудник компании может составить план обучения на год, которое можно проходить как в Тюмени, так и в других городах России.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Индивидуальная программа карьерного роста</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Каждый сотрудник, при согласовании с руководителем, может составить программу индивидуального карьерного роста.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Корпоративная библиотека</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Мы регулярно следим за лучшими новинками бизнес литературы и заказываем их в корпоративную библиотеку компании.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Книжный клуб</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Раз в месяц наша команда собирается для проведения Книжного клуба. Мы презентуем новинки бизнес литературы, делимся новыми знаниями, рассматриваем возможности их внедрения.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Совместное обучение всей команды</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Мы не только проходим индивидуальные обучения, но и участвуем в совместных корпоративных тренингах с обязательным внедрением полученных знаний.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="vacancy-description">-->
<!--            <div class="vacancy-description__item vacancy-description__item--gallery">-->
<!--                <div class="vacancy-description-gallery js-vacancy-description-gallery">-->
<!--                    <div class="vacancy-description-gallery__image">-->
<!--                        <img/>-->
<!--                    </div>-->
<!--                    <div class="vacancy-description-gallery__slider vacancy-description-gallery__slider--left">-->
<!--                        <div class="glide">-->
<!--                            <div class="glide__track" data-glide-el="track">-->
<!--                                <ul class="glide__slides">-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x207" data-index="0"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x208" data-index="1"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x209" data-index="2"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x210" data-index="3"/>-->
<!--                                    </li>-->
<!--                                    <li class="glide__slide">-->
<!--                                        <img src="https://source.unsplash.com/300x211" data-index="4"/>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="vacancy-description__item vacancy-description__item--text">-->
<!--                <div class="vacancy-description-text">-->
<!--                    <div class="vacancy-description-text__title">Корпоративная культура</div>-->
<!--                    <div class="vacancy-description-text__text-blocks">-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Календарь мероприятий</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >В компании действует календарь корпоративных мероприятий с тематическими интересными событиями для всей команды.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Традиции</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >В компании бережно соблюдаются корпоративные традиции. Одна из которых – возможность не ходить на работу в День Рождения.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Обеды в день прихода нового сотрудника</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >В день прихода нового сотрудника мы устраиваем совместный корпоративный обед, чтобы рассказать о себе и познакомиться-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Совместные занятия спортом</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Офис компании расположен в историческом центре города, рядом с главной точкой притяжения для всех жителей и гостей – современной и красивой набережной.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="vacancy-description-text__text-block">-->
<!--                            <div class="vacancy-description-text__text-block-title">Креативные поздравления с праздниками</div>-->
<!--                            <div class="vacancy-description-text__text-block-text"-->
<!--                            >Сотрудники компании имеют возможность купить земельный участок по выгодной цене в соответствии с опытом работы в компании.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
