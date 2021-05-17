<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return;
}
?>
<section class="section mb-large">
    <div class="container">
        <?
        $APPLICATION->IncludeComponent(
            "iqdev:ok.static.text",
            "workstage",
            []
        );
        ?>
        <div class="work-stage-container">
            <? foreach ($arResult as $iKey => $aItem) :?>
                <div class="work-stage">
                    <div class="work-stage__index"><?=++$iKey?></div>
                    <div class="work-stage__header">
                        <div class="work-stage__icon">
                            <img src="<?=$aItem['icon'] ?? ''?>"/>
                        </div>
                        <div class="work-stage__line"></div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title"><?=$aItem['title'] ?? ''?></div>
                        <div class="work-stage__description">
                            <?=$aItem['description'] ?? ''?>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
