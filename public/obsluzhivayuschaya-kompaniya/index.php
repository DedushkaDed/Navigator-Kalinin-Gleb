<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'iqdev:ok.static.text',
    'services',
    []
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.static.text',
    'permanent.services',
    []
);
//          Ошибка
$APPLICATION->IncludeComponent(
    'iqdev:ok.permanent.services',
    'cards',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('permanent_services_content'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.static.text',
    'additional.services',
    []
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.additional.services',
    'slider',
    []
);
//                  Ошибка
$APPLICATION->IncludeComponent(
    'iqdev:ok.work.stages',
    'workstage',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('work_stages'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.callback.forms',
    'ask.question',
    []
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.news.reviews.slider',
    'news.reviews',
    []
);
$APPLICATION->IncludeComponent(
    'iqdev:ok.answer.to.questions',
    'answer.question',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('answer_to_questions'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);
//              Ошибка
$APPLICATION->IncludeComponent(
    'iqdev:ok.contacts',
    'contacts',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('ok_contact_slider'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
