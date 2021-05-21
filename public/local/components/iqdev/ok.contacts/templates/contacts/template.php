<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <?
        $APPLICATION->IncludeComponent(
            "iqdev:ok.static.text",
            "contacts",
            []
        );
        ?>
            <div class="glide contacts-persons js-contacts-persons">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?foreach ($arResult as $aItem) :?>
                            <li class="glide__slide">
                                <div class="contacts-person contacts-person--slider">
                                    <?if (!empty($aItem['image'])) :?>
                                        <div class="contacts-person__photo" style="background-image:url(<?=$aItem['image']?>);"></div>
                                    <?endif;?>
                                    <div class="contacts-person__content">
                                        <div class="contacts-person__name"><?=$aItem['name'] ?? ''?></div>
                                        <div class="contacts-person__position"><?=$aItem['personPosition'] ?? ''?></div>
                                        <?if (!empty($aItem['phones'])) :?>
                                            <ul class="contacts-person__contact-group">
                                                <?foreach ($aItem['phones'] as $sPhone) :?>
                                                        <li><?=$sPhone?></li>
                                                <?endforeach;?>
                                            </ul>
                                        <?endif;?>
                                        <?if (!empty($aItem['emails'])) :?>
                                            <?foreach ($aItem['emails'] as $sEmail) :?>
                                                <ul class="contacts-person__contact-group">
                                                    <li><?=$sEmail?></li>
                                                </ul>
                                            <?endforeach;?>
                                        <?endif;?>
                                    </div>
                                </div>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>
        <?
        $APPLICATION->IncludeComponent(
            "iqdev:ok.static.text",
            "contacts.table",
            []
        );
        ?>
    </div>
</section>
