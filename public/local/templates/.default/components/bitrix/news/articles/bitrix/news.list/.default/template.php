<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
foreach ($arResult['ITEMS'] as $item) {
    $templateData[] = [
        'title' => $item['NAME'],
        'image' => \CFile::ResizeImageGet(
            $item["PREVIEW_PICTURE"],
            ["width" => 591, "height" => 300],
            BX_RESIZE_IMAGE_PROPORTIONAL
        )['src'],
        'description' =>  $item['~PREVIEW_TEXT'],
        'link' => $item['DETAIL_PAGE_URL'],
    ];
}
echo $arResult["NAV_STRING"];
