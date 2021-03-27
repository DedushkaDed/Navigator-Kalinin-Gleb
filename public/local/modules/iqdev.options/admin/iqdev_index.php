<?php
/**
 * @phan-file-suppress PhanTypeMismatchArgumentInternalProbablyReal, PhanTypeSuspiciousEchoPhanTypeSuspiciousStringExpression, PhanTypeSuspiciousStringExpression, PhanTypeSuspiciousEcho, PhanUnreferencedUseNormal
 */
define('ADMIN_MODULE_NAME', 'iqdev.options');

require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_before.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_after.php';

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
if (!$USER->IsAuthorized()) {
    $APPLICATION->authForm('Nope');
}
$app = Application::getInstance();
$context = $app->getContext();
$request = $context->getRequest();

$module_id = "iqdev.options";
CModule::IncludeModule($module_id);
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/options.php");
$RIGHT = $APPLICATION->GetGroupRight($module_id);

if($RIGHT >= "R") :

    $arAllOptions = iqdev\options\Options::$allOptions;

    $aTabs = iqdev\options\Options::$aTabs;

    $tabControl = new CAdminTabControl("tabControl", $aTabs);


    if($REQUEST_METHOD=="POST" && strlen($Update.$Apply.$RestoreDefaults) > 0 && $RIGHT=="W" && check_bitrix_sessid())
    {
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/perfmon/prolog.php");

        if(strlen($RestoreDefaults)>0)
            COption::RemoveOption("WE_ARE_CLOSED_TEXT");
        else
        {

            foreach ($aTabs as $aTab) {
                foreach ($arAllOptions[$aTab['DIV']] as $arOption) {
                    $name = $arOption[0];
                    $val = $_REQUEST[$aTab['DIV']][$name];

                    COption::SetOptionString($module_id, $aTab['DIV'].'.'.$name, $val);
                    $cache = \Bitrix\Main\Application::getInstance()->getManagedCache();
                    $cacheId = 'page_options_' . $aTab['DIV'];
                    $cache->clean($cacheId);
                }
            }
        }

        ob_start();
        $Update = $Update.$Apply;
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/admin/group_rights.php");
        ob_end_clean();
    }


    ?>
    <form method="post" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=urlencode($module_id)?>&amp;lang=<?=LANGUAGE_ID?>">
        <?
        $tabControl->Begin();
        $arNotes = array();
        foreach ($aTabs as $aTab) {
            $tabControl->BeginNextTab();
            if ($aTab['DIV'] != 'access') {
                foreach ($arAllOptions[$aTab['DIV']] as $arOption):
 
                    $val = COption::GetOptionString($module_id, $aTab['DIV'].'.'.$arOption[0], $arOption[3]);
                    $type = $arOption[2];
                    if (isset($arOption[4]))
                        $arNotes[] = $arOption[4];
                    ?>
                    <tr>
                        <td width="40%" nowrap <?
                        if ($type[0] == "textarea") echo 'class="adm-detail-valign-top"' ?>>
                            <?
                            if (isset($arOption[4])):?>
                                <span class="required"><sup><?
                                        echo count($arNotes) ?></sup></span>
                            <? endif; ?>
                            <label for="<?
                            echo htmlspecialcharsbx($arOption[0]) ?>"><?
                                echo $arOption[1] ?>:</label>
                        <td width="60%">
                            <?
                            if ($type[0] == "checkbox"):?>
                                <input type="checkbox" name="<?
                                echo $aTab['DIV'].'['.htmlspecialcharsbx($arOption[0]).']' ?>" id="<?
                                echo htmlspecialcharsbx($arOption[0]) ?>" value="Y"<?
                                if ($val == "Y") echo " checked"; ?>>
                            <? elseif ($type[0] == "text"): ?>
                                <input type="text" size="<?
                                echo $type[1] ?>" maxlength="255" value="<?
                                echo htmlspecialcharsbx($val) ?>" name="<?
                                echo $aTab['DIV'].'['.htmlspecialcharsbx($arOption[0]).']' ?>" id="<?
                                echo htmlspecialcharsbx($arOption[0]) ?>"><?
                                if ($arOption[0] == "slow_sql_time") echo GetMessage("PERFMON_OPTIONS_SLOW_SQL_TIME_SEC") ?>
                            <? elseif ($type[0] == "textarea"): ?>
                                <textarea rows="<?
                                echo $type[1] ?>" cols="<?
                                echo $type[2] ?>" name="<?
                                echo $aTab['DIV'].'['.htmlspecialcharsbx($arOption[0]).']' ?>" id="<?
                                echo htmlspecialcharsbx($arOption[0]) ?>"><?
                                    echo htmlspecialcharsbx($val) ?></textarea>
                            <? endif ?>
                        </td>
                    </tr>
                <?endforeach;
            } else {
                require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/admin/group_rights.php");
            }
        }?>
        <?$tabControl->Buttons();?>
        <input <?if ($RIGHT<"W") echo "disabled" ?> type="submit" name="Update" value="<?=GetMessage("MAIN_SAVE")?>" title="<?=GetMessage("MAIN_OPT_SAVE_TITLE")?>" class="adm-btn-save">
        <input <?if ($RIGHT<"W") echo "disabled" ?> type="submit" name="Apply" value="<?=GetMessage("MAIN_OPT_APPLY")?>" title="<?=GetMessage("MAIN_OPT_APPLY_TITLE")?>">
        <?if(strlen($_REQUEST["back_url_settings"])>0):?>
            <input <?if ($RIGHT<"W") echo "disabled" ?> type="button" name="Cancel" value="<?=GetMessage("MAIN_OPT_CANCEL")?>" title="<?=GetMessage("MAIN_OPT_CANCEL_TITLE")?>" onclick="window.location='<?echo htmlspecialcharsbx(CUtil::addslashes($_REQUEST["back_url_settings"]))?>'">
            <input type="hidden" name="back_url_settings" value="<?=htmlspecialcharsbx($_REQUEST["back_url_settings"])?>">
        <?endif?>
        <input type="submit" name="RestoreDefaults" title="<?echo GetMessage("MAIN_HINT_RESTORE_DEFAULTS")?>" OnClick="confirm('<?echo AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING"))?>')" value="<?echo GetMessage("MAIN_RESTORE_DEFAULTS")?>">
        <?=bitrix_sessid_post();?>
        <?$tabControl->End();?>
    </form>
    <?
    if(!empty($arNotes))
    {
        echo BeginNote();
        foreach($arNotes as $i => $str)
        {
            ?><span class="required"><sup><?echo $i+1?></sup></span><?echo $str?><br><?
        }
        echo EndNote();
    }
    
endif;

require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_admin.php';
