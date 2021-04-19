<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="navigation">
        <?php foreach($arResult as $arItem): ?>
            <a class="navigation__item" href="<?=$arItem["LINK"]?>">
                <span class="navigation__page"><?=$arItem["TEXT"]?></span>
            </a>
        <?php endforeach?>
    </div>
<?endif?>