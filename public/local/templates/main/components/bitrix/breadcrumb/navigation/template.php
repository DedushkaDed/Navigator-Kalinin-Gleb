<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if(empty($arResult))
	return "";

ob_start();

$sResult = '<div class="breadcrumbs">';
$elCount = count($arResult);

foreach ($arResult as $index => $item):
    if (!empty($item['LINK']) && $index < ($elCount - 1)):
        $sResult .= '<a class="breadcrumbs__item" href=" ' . $item['LINK'] . ' "> ' . $item['TITLE'] . '</a> <span class="breadcrumbs__divider">&gt;</span>';
    else:
        $sResult .= '<span class="breadcrumbs__item"> ' . $item['TITLE'] . ' </span>';
    endif;
endforeach;

$sResult .= '</div>';
echo $sResult;

$sResultBuffer = ob_get_contents();
ob_end_clean();
return $sResultBuffer;
?>