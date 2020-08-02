<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
$arBannersId         = $arResult['PROPERTIES']['BANNER']['VALUE'];
$arResult['banners'] = \IQDEV\Models\Banners::getBanners($arBannersId);
