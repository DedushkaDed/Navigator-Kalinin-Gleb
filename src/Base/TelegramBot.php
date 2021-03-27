<?php

namespace IQDEV\Base;

/**
 * Class TelegramBot
 *
 * @package IQDEV\Base
 */
class TelegramBot
{
    /**
     * @var string $token
     */
    private $token;

    /**
     * TelegramBot constructor.
     *
     * @param $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @param $action
     * @param array $data
     *
     * @return false|mixed
     */
    private function sendRequest($action, $data = [])
    {
        $apiendpoint = ucfirst($action);
        $token = $this->token;

        $ch = curl_init("https://api.telegram.org/bot" . $token . "/" . $apiendpoint);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => [
                'Host: api.telegram.org',
                'Content-Type: multipart/form-data'
            ],
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_CONNECTTIMEOUT => 6000,
            CURLOPT_SSL_VERIFYPEER => false
        ]);
        $result = curl_exec($ch);
        curl_close($ch);

        return !empty($result) ? json_decode($result, true) : false;
    }

    /**
     * @param $message
     * @param $chatId
     *
     * @return false|mixed
     */
    public function sendMessage($message, $chatId)
    {
        $action = 'sendMessage';
        $param = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
            'disable_web_page_preview' => false,
            'disable_notification' => false,
            'reply_to_message_id' => null
        ];

        $res = self::sendRequest($action, $param);

        return $res;
    }
}
