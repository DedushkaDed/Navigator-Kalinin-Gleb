<?php
use Bitrix\Main\EventManager;

EventManager::getInstance()->addEventHandler("main", "OnProlog", ["\\IQDEV\\Base\\Load", "initUser"], 200);
EventManager::getInstance()->addEventHandler("main", "OnProlog", ["\\IQDEV\\Base\\Load", "initClasses"], 100);




EventManager::getInstance()->addEventHandler("main", "OnEndBufferContent", ["\\IQDEV\\Base\\Load", "pugRender"], 100);

//AddEventHandler("main", "OnEndBufferContent", "ChangeMyContent");
/* Прячем предупреждение о истечении срока действия демо-версии */
//EventManager::getInstance()->addEventHandler("main", "OnEndBufferContent", 'ClearTrialMessage', 100000);
//function ClearTrialMessage(&$content)
//{
//    $html = array(
//        "<font class=\"tablebodytext\"><font color=\"#FF0000\">",
//        "\n\t\tСрок работы пробной версии продукта истек.",
//        "\n\t\tЧерез две недели этот сайт полностью прекратит свою работу.",
//        "\n\t\tВы можете купить полнофункциональную версию продукта на сайте ",
//        "<a href=\"http://www.1c-bitrix.ru/?r1=bsm7trial&amp;r2=expiried\">www.1c-bitrix.ru</a>.",
//        "\n\t\t</font></font>"
//    );
//
//    $content = str_replace($html, '', $content);
//
//    $html = array(
//        "Trial period of the product has expired.",
//        "You can purchase the full version of the product on the
//         site <a href=\"http://www.bitrixsoft.com/\"&gt;www.bitrixsoft.com&lt;/a>."
//    );
//
//    $content = trim($content);
//
//    $content = str_replace($html, '', $content);
//}
