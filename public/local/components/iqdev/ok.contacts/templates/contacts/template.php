<?
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
