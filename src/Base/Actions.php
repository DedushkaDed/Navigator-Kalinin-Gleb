<?php

namespace IQDEV\Base;

use IQDEV\Entity\AdditionalServices;
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
            $this->sAction = $this->oRequest["ajaxAction"];
        }
        if (isset($this->oRequest["iqDevAction"])) {
            $this->sTypeAction = "Action";
            $this->sAction = $this->oRequest["iqDevAction"];
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

        $this->setAjaxResponse(['status' => (bool) $oCallbackForm]);
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

        $this->setAjaxResponse(['status' => (bool) $oCallbackForm]);
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

        $this->setAjaxResponse(['status' => (bool) $oCallbackForm]);
    }

    /**
     * Запись данных из формы 'Отправить резюме' в ИБ.
     *
     * @return void
     */
    public function formResumeAjaxAction()
    {
        $sName = $this->oRequest['name'];
        $sPhone = $this->oRequest['phone'];
        $aInputFile = $_FILES['file'];

        $iCallbackForm = FormsHandler::setResumeInputCaptcha($sName, $sPhone, $aInputFile);

        $this->setAjaxResponse(['status' => (bool) $iCallbackForm]);
    }

    /**
     * Запись данных из формы 'Задайте вопрос обслуживающей компании!'.
     *
     * @return void
     */
    public function formQuestionServiceAjaxAction()
    {
        $aInputData = $this->oRequest;

        $iCallBackForm = FormsHandler::setFormQuestionInputCaptcha($aInputData);

        $this->setAjaxResponse(['status' => (bool) $iCallBackForm]);
    }
    /**
     * Отображение формы 'Дополнительные услуги'.
     *
     * @return void
     */
    public function formAdditionalServicesAjaxAction()
    {
        $iCallBackForm = FormsHandler::setAdditionalServicesInputCaptcha();
        $this->setAjaxResponse(['status' => (bool) $iCallBackForm]);
    }
    /**
     * Отображение слайдера 'Дополнительные услуги'.
     *
     * @return void
     */
    public function getAdditionalServicesAjaxAction()
    {
        $aServices = AdditionalServices::getAdditionalServicesAll();
        $this->setAjaxResponse($aServices);
    }

    /**
     * Модальная форма 'Инвестировать в землю'.
     *
     * @return void
     */
    public function formInvestmentAjaxAction()
    {
//        var_dump($this->oRequest['name']);
//        $iCallBackForm = FormsHandler::();

//        if (!empty($iCallBackForm)) {
//            $this-$this->setAjaxResponse(['status' => true]);
//        }
//        $this->setAjaxResponse(['status' => false]);
    }

    /**
     * Слайдер с участками 'Цены на земельные участки'.
     *
     */
    public function getFiltersAjaxAction()
    {

        $aInputData = $this->oRequest;
        $aFiltersData = FormsHandler::getContentData($aInputData);

        $this->setAjaxResponse($aFiltersData);
    }
    /**
     *
     *
     */
    public function getMapDataAjaxAction()
    {

        $aRandom = [
            'areas' => [
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '14.21',
                        'cost' => '1 313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '14.21',
                        'cost' => '1 313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '14.21',
                        'cost' => '13 313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '124.21',
                        'cost' => '21 313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '14.21',
                        'cost' => '1 2313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.64890934036,
                            118.31418186182,
                        ],
                        [
                            -135.9643030162,
                            116.78691338126,
                        ],
                        [
                            -137.66813497091,
                            119.26762189363,
                        ],
                        [
                            -136.30860099494,
                            120.83903067426,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Акция',
                        'stus_id' => '5',
                        'area' => '141.21',
                        'cost' => '1 1313 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => 'orange',
                    'itemID' => '1025',
                ],
                [
                    'coords' => [
                        [
                            -134.31344033112,
                            114.23557766024,
                        ],
                        [
                            -131.71796431002,
                            117.25480329076,
                        ],
                        [
                            -130.28806005912,
                            115.14063457527,
                        ],
                        [
                            -132.94733976647,
                            112.06935372243,
                        ],
                    ],
                    'data' => [
                        'num' => '383',
                        'stus' => 'Свободен',
                        'stus_id' => '12',
                        'area' => '11.21',
                        'cost' => '1 900 000',
                        'cost_for_100' => '89000',
                        'full_cost' => '1300000',
                        'full_cost_for_100' => '80000',
                        'poselok' => 'Луговое',
                        'kadastr' => '72=>17=>1105002=>2765',
                        'housenum' => '25',
                        'com' => [
                            'gas',
                            'elec',
                            'roads',
                            'lights',
                            'security',
                        ],
                    ],
                    'color' => '#228b22',
                    'itemID' => '1075',
                ],
            ],
            'markers' => [
                [
                    'name' => 'Лыжная база',
                    'coords' => [
                        -27.1875,
                        44.84375,
                    ],
                ],
            ],
            'sectrors' => [
                [
                    'type' => 'Feature',
                    'geometry' => [
                        'type' => 'Polygon',
                        'coordinates' => [
                            [
                                [
                                    145.09375,
                                    -64.125,
                                ],
                                [
                                    150,
                                    -66.78125,
                                ],
                                [
                                    152.1964293718338,
                                    -64.97321557998657,
                                ],
                                [
                                    161.1458330154419,
                                    -69.9375,
                                ],
                                [
                                    185.65625,
                                    -48.65625,
                                ],
                                [
                                    209.03125,
                                    -27.625,
                                ],
                                [
                                    214.21875,
                                    -26.6875,
                                ],
                                [
                                    202.34375,
                                    -13.3125,
                                ],
                                [
                                    177.40625,
                                    -26.5625,
                                ],
                                [
                                    184.96875,
                                    -30.6875,
                                ],
                            ],
                            [
                                [
                                    122.03125,
                                    -83,
                                ],
                                [
                                    134.65625,
                                    -72.6875,
                                ],
                                [
                                    148.78125,
                                    -80.6875,
                                ],
                                [
                                    136.03125,
                                    -91.375,
                                ],
                            ],
                        ],
                    ],
                    'properties' => [
                        'name' => 'квартал Полевой',
                        'color' => '#bf7b1e',
                        'index_c' => 1,
                    ],
                ],
            ],
            'tileUrl' => 'https=>//navigator-tmn.ru/uploads/villages/4_vill/[z]/[x]_[y].jpg',
            'zoom' => [
                'min' => 2,
                'max' => 5,
                'defaultfullscreen' => 3,
                'defaultWindow' => 2,
            ],
        ];

        $this->setAjaxResponse($aRandom);
    }
}