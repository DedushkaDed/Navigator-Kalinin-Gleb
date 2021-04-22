<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="footer__navigation">
        <?php foreach($arResult as $aItem): ?>
            <div class="footer__navigation-item" href="<?=$aItem["LINK"]?>">
                <span><?=$aItem["TEXT"]?></span>
                <!-- Иправить вёрстку на компонент (выпадающее меню) -->
                <div class="footer__navigation-subitems">
                    <a class="footer__navigation-subitem"
                       href="/projects/detail">Альпийская долина
                    </a>
                    <a
                            class="footer__navigation-subitem" href="/projects/detail">Есенино
                    </a>
                    <a
                            class="footer__navigation-subitem" href="/projects/detail">Ёлки
                    </a>
                    <a
                            class="footer__navigation-subitem" href="/ceni-na-zemelnie-uchastki/">Выбрать
                        участок
                    </a>
                </div>
            </div>
        <?endforeach?>
    </div>
<?endif?>