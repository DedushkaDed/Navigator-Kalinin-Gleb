<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
global $APPLICATION, $USER;

if ($USER->IsAdmin() && $_REQUEST['panel']) {
    $APPLICATION->ShowHead();
    $APPLICATION->ShowPanel();
} else {
    $APPLICATION->ShowMeta("robots", false, true);
    $APPLICATION->ShowMeta("keywords", false, true);
    $APPLICATION->ShowMeta("description", false, true);
    $APPLICATION->ShowLink("canonical", null, true);
    $APPLICATION->ShowHeadStrings();
}

if (array_filter($_REQUEST, function ($key) {
    return $key == strpos($key, 'PAGEN');
}, ARRAY_FILTER_USE_KEY)
) {
    $APPLICATION->SetPageProperty('robots', 'noindex,follow');
}
?><title><?=$APPLICATION->ShowTitle();?></title>
