<?php
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
        </div>
    </div>
</section>
