<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description",
        "Земельные участки в Тюмени от девелоперской компании «Навигатор», у нас — ✔гарантия чистоты сделки; ✔удобное расположение; ✔собственная обслуживающая компания ☎ +7 3452 564-275");
    $APPLICATION->SetPageProperty("title",
        "Купить участок в Тюмени | ДК «Навигатор»");

    global $APPLICATION;

    $APPLICATION->SetTitle("Земельные участки в Тюмени");

    echo 'test';



//    CModule::IncludeModule('iqdev.options');
//
//    IQDEV\Base\Load::setTemplate('/local/markup/src/markup/page/index.pug');

    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
