<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$aBuyerOptions = \IQDEV\Options\Options::getPageOptions('buyer_main_page');


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
?>

<?php if (empty($arResult['mapCards'])) {
    return;
} ;?>

<section class="section mt-medium mb-large">
    <div class="container">
        <?if (!empty($aBuyerOptions['sectionHeader'])) :?>
            <h1 class="section-header"><?=$aBuyerOptions['sectionHeader']?></h1>
        <?endif;?>
        <div class="work-stage-container">
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <div class="work-stage">
                    <?if (!empty($aItem['indexItem'])) :?>
                        <div class="work-stage__index"><?=$aItem['indexItem']?></div>
                    <?endif;?>
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <? if (!empty($aItem['icon'])) :?>
                                <img src="<?=$aItem['icon']?>"/>
                            <?endif;?>
                        </div>
                        <div class="work-stage__line"></div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title"><?=$aItem['title']?></div>
                        <div class="work-stage__description">Заполните
                            <div class="js-modal-trigger" data-modal-id="callback">форму обратной связи.</div>
                            Специалист нашей компании перезвонит вам.
                        </div>
                    </div>
                </div>
            <?endforeach;?>
<!--            <div class="work-stage">-->
<!--                <div class="work-stage__index">2</div>-->
<!--                <div class="work-stage__header">-->
<!--                    <div class="work-stage__icon">-->
<!--                        <img src="/assets/image/work-stages/buyer/2.svg"/>-->
<!--                    </div>-->
<!--                    <div class="work-stage__line"></div>-->
<!--                </div>-->
<!--                <div class="work-stage__text">-->
<!--                    <div class="work-stage__title">Экскурсия в поселок и выбор участка</div>-->
<!--                    <div class="work-stage__description">В удобное для вас время-->
<!--                        <div class="js-modal-trigger" data-modal-id="visit">покажем</div>-->
<!--                        коттеджные поселки и поможем выбрать участок.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="work-stage">-->
<!--                <div class="work-stage__index">3</div>-->
<!--                <div class="work-stage__header">-->
<!--                    <div class="work-stage__icon">-->
<!--                        <img src="/assets/image/work-stages/buyer/3.svg"/>-->
<!--                    </div>-->
<!--                    <div class="work-stage__line"></div>-->
<!--                </div>-->
<!--                <div class="work-stage__text">-->
<!--                    <div class="work-stage__title">Подписание договора и оформление земли</div>-->
<!--                    <div class="work-stage__description"-->
<!--                    >Вы выбираете удобный способ оплаты. Сделки с «Навигатором» прозрачны. Мы являемся собственниками земли. Юристы компании сопровождают сделку.-->
<!--                        <div class="js-modal-trigger" data-modal-id="lawyer">Задать вопрос юристу.</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="work-stage">-->
<!--                <div class="work-stage__index">4</div>-->
<!--                <div class="work-stage__header">-->
<!--                    <div class="work-stage__icon">-->
<!--                        <img src="/assets/image/work-stages/buyer/4.svg"/>-->
<!--                    </div>-->
<!--                    <div class="work-stage__line"></div>-->
<!--                </div>-->
<!--                <div class="work-stage__text">-->
<!--                    <div class="work-stage__title">Поздравляем! Участок ваш</div>-->
<!--                    <div class="work-stage__description">-->
<!--                        Но на этом наше знакомство не заканчивается.-->
<!--                        Мы заботимся о жителях коттеджных поселков, занимаемся-->
<!--                        <a href="/obsluzhivayuschaya-kompaniya/">благоустройством территорий.</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>