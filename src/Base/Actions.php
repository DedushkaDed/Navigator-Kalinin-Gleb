<?php

namespace IQDEV\Base;

use IQDEV\Entity\Office;
use IQDEV\Forms\FormsHandler;

class Actions
{
    /**
     * Request Action
     *
     * @var mixed
     */
    public $oRequest;
    /**
     * Название Action
     *
     * @var mixed|string
     */
    private $sAction = '';
    /**
     * Тип Action
     *
     * @var string
     */
    private $sTypeAction;
    /**
     * Ответ Action
     *
     * @var mixed
     */
    private $dResponse;

    /**
     * Actions constructor.
     */
    public function __construct()
    {
        $aJson = json_decode(file_get_contents('php://input'), true);
        if (is_array($aJson)) {
            $this->oRequest = array_merge($_REQUEST, $aJson);
        } else {
            $this->oRequest = $_REQUEST;
        }

        if (isset($this->oRequest["ajaxAction"])) {
            $this->sTypeAction = "AjaxAction";
            $this->sAction     = $this->oRequest["ajaxAction"];
        }
        if (isset($this->oRequest["iqDevAction"])) {
            $this->sTypeAction = "Action";
            $this->sAction     = $this->oRequest["iqDevAction"];
        }
        if (isset($this->sAction) && isset($this->sTypeAction)) {
            $sName = $this->sAction . $this->sTypeAction;
            $this->$sName();
        }
    }

    /**
     * Автоматически вызывает нужные экшены
     *
     * @param $methodName
     * @param $arguments
     *
     * @return void
     */
    public function __call($methodName, $arguments)
    {
        $this->setAjaxResponse(
            [
                'method' => $methodName,
                'response' => 'Такого метода API не существует',
                'params' => $arguments
            ]
        );
    }

    /**
     * Установка ответа для Ajax Action
     *
     * @param $result
     *
     * @return void
     */
    private function setAjaxResponse($result)
    {
        Header('Access-Control-Allow-Origin:*');
        Header('Content-Type: application/json');
        Header('Access-Control-Allow-Credentials:false');
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        die();
    }

    /**
     * Получение ответа для non-Ajax Action
     *
     * @param $sAction
     *
     * @return mixed
     */
    public function response($sAction)
    {
        if ($sAction == $this->sAction) {
            return $this->dResponse;
        } else {
            return [
                'success' => false,
                'message' => [
                    'Такого обработчика не зарегистрировано',
                ],
            ];
        }
    }

    /**
     * Установка ответа для non-Ajax Action
     *
     * @param $result
     *
     * @return void
     */
    private function setResponse($result)
    {
        $this->dResponse = $result;
    }

    /**
     * Тестовая отправка
     *
     * @return void
     */
    public function testSendAjaxAction()
    {
        $this->setAjaxResponse($this->oRequest);
    }

    /**
     * Получение координат офисов yandexMap
     *
     * @return void
     */
    public function getOfficeCoordsAjaxAction()
    {
        $coords = Office::getCordsAll();
        $this->setAjaxResponse($coords);
    }

    /**
     * Запись данных из формы 'Появились вопросы?' в ИБ.
     *
     * @return void
     */
    public function formQuestionAjaxAction()
    {
        $sName = $this->oRequest['name'];
        $sPhone = $this->oRequest['phone'];

        $oCallbackForm = FormsHandler::setFeedbackInputCaptcha($sName, $sPhone);

        if ($oCallbackForm) {
            $this->setAjaxResponse(['status' => true]);
        }
        $this->setAjaxResponse(['status' => false]);
    }

    /**
     * Запись данных из формы 'Экскурсия по загородной жизни' в ИБ.
     *
     * @return void
     */
    public function formExcursionAjaxAction()
    {
        $sName = $this->oRequest['name'];
        $sPhone = $this->oRequest['phone'];

        $oCallbackForm = FormsHandler::setExcursionInputCaptcha($sName, $sPhone);

        if ($oCallbackForm) {
            $this->setAjaxResponse(['status' => true]);
        }
        $this->setAjaxResponse(['status' => false]);
    }

    /**
     * Запись данных из формы 'Подписывайтесь на новости и акции' в ИБ.
     *
     * @return void
     */
    public function formSubscribeAjaxAction()
    {
        $sEmail = $this->oRequest['email'];
        $oCallbackForm = FormsHandler::setEmailSubscribeInputCaptcha($sEmail);

        if ($oCallbackForm) {
            $this->setAjaxResponse(['status' => true]);
        }
        $this->setAjaxResponse(['status' => false]);
    }
}
