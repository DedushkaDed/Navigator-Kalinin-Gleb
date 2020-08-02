<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

$templateData['name'] = $arResult['NAME'];

$src = $arResult['DETAIL_PICTURE']['SRC'];

$sDetailImage = "<div class='detail-content__image'><img class='img' src='$src' /></div>";

$templateData['content'] = $sDetailImage . $arResult['DETAIL_TEXT'];

$url = SITE_SERVER_NAME.$APPLICATION->GetCurPage();

$templateData['share'] = [
    'vkontakte' => 'https://vk.com/share.php?url=http://'.$url,
    'odnoklassniki' => 'https://connect.ok.ru/offer?url=http://'.$url,
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=http://'.$url,
];

if ($arResult['PROPERTIES']['GALLERY']['VALUE']) {
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $value) {
        $templateData['gallery'][]['image'] = CFile::GetPath($value);
    }
}

$templateData['photos'] = [
    'vkontakte' => $arResult['PROPERTIES']['PHOTO_VK']['VALUE'],
    'odnoklassniki' => $arResult['PROPERTIES']['PHOTO_ODNOKLASSNIKI']['VALUE'],
    'facebook' => $arResult['PROPERTIES']['PHOTO_FACEBOOK']['VALUE'],
];

$templateData['banners'] = $arResult['banners'];
