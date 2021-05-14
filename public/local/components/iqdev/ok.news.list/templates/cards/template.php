<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return;
}
?>
<section class="section mb-large">
    <div class="container">
        <div class="cards-color">
            <?foreach ($arResult as $aItem) :?>
                <div class="cards-color__card <?=$aItem['backgorundColor'] ?? ''?>">
                    <div class="cards-color__card-title"><?=$aItem['title']?></div>
                    <div class="cards-color__card-text">
                        <?=$aItem['description']?>
                    </div>
                    <div class="cards-color__card-icon">
                        <img class="cards-color__card-icon-image" src="<?=$aItem['icon']?>"/>
                    </div>
                </div>
            <?endforeach;?>
<!--            <div class="cards-color__card cards-color__card--green">-->
<!--                <div class="cards-color__card-title">Уборка снега</div>-->
<!--                <div class="cards-color__card-text">-->
<!--                    Во время снегопада мы убираем снег круглосуточно в каждом поселке. В наших поселках комфортно!-->
<!--                </div>-->
<!--                <div class="cards-color__card-icon">-->
<!--                    <img class="cards-color__card-icon-image" src="/assets/image/icons/shovel_white.svg"/>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="cards-color__card cards-color__card--blue">-->
<!--                <div class="cards-color__card-title">Благоустройство территории</div>-->
<!--                <div class="cards-color__card-text">-->
<!--                    В каждом поселке мы создаем территорию для комфортной жизни детей и взрослых. В наших поселках интересно!-->
<!--                </div>-->
<!--                <div class="cards-color__card-icon">-->
<!--                    <img class="cards-color__card-icon-image" src="/assets/image/icons/tree_white.svg"/>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="cards-color__card cards-color__card--green">-->
<!--                <div class="cards-color__card-title">Уличное освещение</div>-->
<!--                <div class="cards-color__card-text">-->
<!--                    Мы следим за работой уличного освещения на каждой улице. В наших поселках уютно!-->
<!--                </div>-->
<!--                <div class="cards-color__card-icon">-->
<!--                    <img class="cards-color__card-icon-image" src="/assets/image/icons/lamp_white.svg"/>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>