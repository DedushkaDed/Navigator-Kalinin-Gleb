<?php

namespace IQDEV\Base;

use Bitrix\Main\Web\HttpClient;

class Recaptcha
{

    private static $score = 0.5;

    private static $recaptchaSecretKey = false;

    public static function recaptchaCheck($grToken)
    {
        self::$recaptchaSecretKey = \IQDEV\Base\Load::getCaptchaKeys()['recaptchaPrivateKey'];

        if ($grToken && self::$recaptchaSecretKey) {
            $grUrl  = 'https://www.google.com/recaptcha/api/siteverify';
            $params = [
                'secret' => self::$recaptchaSecretKey,
                'response' => $grToken,
                'remoteip' => \Bitrix\Main\Service\GeoIp\Manager::getRealIp()
            ];

            $httpClient  = new HttpClient();
            $rawResponse = $httpClient->post($grUrl, http_build_query($params));
            $response    = json_decode($rawResponse, true);

            if ($response && $response['success'] && $response['score'] > self::$score) {
                $result = true;
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }
        return $result;
    }
}
