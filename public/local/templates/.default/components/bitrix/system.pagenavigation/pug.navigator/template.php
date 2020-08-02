<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        $templateData['enable'] = false;
    }
}

$strNavQueryString     = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

$templateData['enable'] = true;
$templateData['label']  = $arResult["NavTitle"] .
    ' c ' . $arResult["NavFirstRecordShow"] . ' по ' .
    $arResult["NavLastRecordShow"] . ' из ' . $arResult["NavRecordCount"];

if ($arResult["NavPageNomer"] > 1) {
    if ($arResult["bSavePage"]) :
        $templateData['buttonPrev'] = [
            'active' => true,
            'route' => $arResult["sUrlPath"] . '?' . $strNavQueryString .
            'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1)
        ];
    else :
        if ($arResult["NavPageNomer"] > 2) :
            $templateData['buttonPrev'] = [
                'active' => true,
                'route' => $arResult["sUrlPath"] . '?' . $strNavQueryString .
                 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1)
            ];
        else :
            $templateData['buttonPrev'] = [
                'active' => true,
                'route' => $arResult["sUrlPath"] . $strNavQueryStringFull
            ];
        endif;
    endif;
} else {
    $templateData['buttonPrev'] = [
        'active' => false
    ];
}

while ($arResult["nStartPage"] <= $arResult["nEndPage"]) {
    if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) {
        $templateData['pages'][] = [
            'label' => $arResult["nStartPage"],
            'active' => true
        ];
    } elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) {
        $templateData['pages'][] = [
            'label' => $arResult["nStartPage"],
            'route' => $arResult["sUrlPath"] . $strNavQueryStringFull,
            'active' => false
        ];
    } else {
        $templateData['pages'][] = [
            'label' => $arResult["nStartPage"],
            'route' => $arResult["sUrlPath"] . '?' . $strNavQueryString .
             'PAGEN_' . $arResult["NavNum"] . '=' . $arResult["nStartPage"],
            'active' => false
        ];
    }
    $arResult["nStartPage"]++;
}

if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
    $templateData['buttonNext'] = [
        'active' => true,
        'route' => $arResult["sUrlPath"] . '?' . $strNavQueryString .
         'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1)
    ];
} else {
    $templateData['buttonNext'] = [
        'active' => false
    ];
}
