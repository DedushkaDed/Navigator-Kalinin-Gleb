<?php

function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
    \CModule::IncludeModule('iqdev.options');
    $arData   = \iqdev\options\Options::getPageOptions('mailer');
    if (false) {
        
        $botToken = $arData['botToken'];
        $chatId   = $arData['idGroup'];

        $message .= SITE_SERVER_NAME;

        $bot = new \IQDEV\Base\TelegramBot($botToken);
        $bot->sendMessage($message, $chatId);

        return true;
    }

    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    //$mail->SMTPDebug = !! (int) getenv('DEBUG');
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru');
    // Set mailer to use SMTP
    $mail->Host = $arData['smtpHost'];

    $mail->SMTPAuth = (bool)$arData['smtpAuth'];
    $mail->Username = $arData['Username'];
    $mail->Password = $arData['Password'];
    $mail->SMTPSecure = $arData['SMTPSecure'];
    $mail->Port = $arData['port'];
    $mail->From = $arData['From'];
    $mail->FromName = $arData['FromName'];

    if ($arData['isHTML'] == 'Y') {
        $useHTML = true;
    } else {
        $useHTML = false;
    }

    $mail->isHTML($useHTML);
    $mail->Body = $message;
    $mail->Subject = $subject;

    $arr = explode("\n", $additionalHeaders);
    if (is_array($arr)) {
        foreach ($arr as $value) {
            //$message=$value.PHP_EOL.$message;
            $arrr = explode(":", $value);
            if (is_array($arr)) {
                foreach ($arr as $value) {
                    //$message=$value.PHP_EOL.$message;
                    $arrr = explode(":", $value);
                    if (strtolower($arrr[0]) == "cc") {
                        $copies = str_replace(" ", "", $arrr[1]);
                        $copies = explode(",", $copies);
                        foreach ($copies as $copy) {
                            $mail->AddCC($copy);
                        }
                    } elseif (strtolower($arrr[0]) == "bcc") {
                        $copies = str_replace(" ", "", $arrr[1]);
                        $copies = explode(",", $copies);
                        foreach ($copies as $copy) {
                            $mail->AddBCC($copy);
                        }
                    } elseif ($arrr[0] == 'Content-Type') {
                        $mail->ContentType = $arrr[1];
                    } elseif ($arrr[0] == 'X-Bitrix-Posting') {
                        $mail->addCustomHeader($arrr[0], $arrr[1]);
                    } else {
                        //do nothing
                    }
                }
            }
        }
    }

    $arAddresses = explode(",", $to);
    if (count($arAddresses) > 1) {
        foreach ($arAddresses as $val) {
            $val = trim($val);
            $mail->AddAddress($val);
        }
    } else {
        $mail->AddAddress($to);
    }

    $status = $mail->Send();

    $mail->clearAddresses();
    $mail->ClearCustomHeaders();

    if (!$status) {
        AddMessage2Log($mail);
        return false;
    } else {
        return true;
    };
}
