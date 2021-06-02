<?php
/**
 * @phan-file-suppress PhanUnreferencedUseNormal
 */
namespace IQDEV\Options;

use Bitrix\Main\Web\HttpClient,
    Bitrix\Main\Page\Asset;

class Options
{

    public static $allOptions = [
        'main_page' => [
            ['titleBanner', 'Заголовок', ['text', 50], 'Продажа земельных участков'],
            ['descriptionBanner', 'Подзаголовок', ['textarea', 5, 50], 'под ИЖС в Тюмени'],
            ['season', 'Время года', ['select', ['winter' => 'Зима', 'summer' => 'Лето']], 'summer'],
            ['video/summer', 'Ссылка на видео (Лето)', ['text', 50], '/assets/video/main-video.mp4'],
            ['poster/summer', 'Постер (Лето)', ['text', 50], '/upload/1.png'],
            ['imageBanner/summer', 'Картинка в шапке (Лето)', ['text', 50], 'http://placehold.it/1200x486'],
            ['video/winter', 'Ссылка на видео (Зима)', ['text', 50], '/assets/video/main-video.mp4'],
            ['poster/winter', 'Постер (Зима)', ['text', 50], '/upload/1.png'],
            ['imageBanner/winter', 'Картинка в шапке (Зима)', ['text', 50], 'http://placehold.it/1200x486'],
            ['sectionHeaderA', 'Блок "О компании" Заголовок ', ['text', 50], 'О компании'],
            ['sectionHeaderB', 'Блок "Купить участок просто" Заголовок ', ['text', 50], 'Купить участок просто'],
            [
                'sectionHeaderC',
                'Блок "Почему выбирают земельные участки у нас?" Заголовок ',
                ['text', 50],
                'Почему выбирают земельные участки у нас?'
            ],
            ['sectionHeaderD', 'Блок "А что у нас нового?" Заголовок ', ['text', 50], 'А что у нас нового?'],
            ['tabLinkA', 'Ссылка: "Подробнее о рассрочке', ['text', 50], '#'],
            ['tabLinkB', 'Ссылка: "Подробнее об ипотеке', ['text', 50], '#'],
            ['tabLinkC', 'Ссылка: "Калькулятор расчета ипотеки', ['text', 50], '#'],
            ['gridUnitSliderLink', 'Ссылка: "Подобрать участок', ['text', 50], '/ceni-na-zemelnie-uchastki/'],
            ['mapVillagesLink', 'Ссылка: "Подобрать участок (на карте)', ['text', 50], '/ceni-na-zemelnie-uchastki/'],
        ],
        'ok_page' => [
            ['titleImage', 'Картинка в шапке', ['text', 50], 'http://placehold.it/1200x486'],
            ['paragraphHeader/title_image', 'Логотип', ['text', 50], 'http://placehold.it/1200x486'],
            ['paragraphHeader/text', 'Текст в шапке', ['text', 50], 'asgfasggas'],
            [
                'paragraphPermanentServices/title',
                'Блок "Постоянные услуги" заголовок',
                ['text', 50],
                'Постоянные услуги'
            ],
            [
                'paragraphPermanentServices/text',
                'Блок "Постоянные услуги" описание',
                ['text', 50],
                'Команда обслуживающей компании оказывает 2 типа услуг: постоянные и дополнительные. Стоимость постоянных входит в ежемесячные/ежеквартальные счета.'
            ],
            [
                'paragraphAdditionalServices/title',
                'Блок "Дополнительные услуги" услуги" заголовок',
                ['text', 50],
                'Дополнительные услуги'
            ],
            [
                'paragraphAdditionalServices/text',
                'Блок "Дополнительные услуги" описание',
                ['text', 50],
                'Нет времени искать подрядчика самостоятельно? Не хотите столкнуться с недобросовестным исполнителем? Мы готовы предложить перечень услуг, которые вы можете заказать у нас за дополнительную оплату.'
            ],
            [
                'workStagesTitle',
                'Блок "Как работает обслуживающая компания?" Заголовок',
                ['text', 50],
                'Как работает обслуживающая компания «Навигатор-Сервис?»'
            ],
            ['questionsTitle', 'Блок "Ответы на вопросы заголовок ', ['text', 50], 'Ответы на частые вопросы'],
            [
                'sliderNewsReviewsTitle',
                'Блок "Новости и отзывы" Заголовок ',
                ['text', 50],
                'Новости и отзывы обслуживающей компании'
            ],
            ['contactsTitle', 'Блок "Контакты" Заголовок ', ['text', 50], 'Контакты'],
            ['dayReception', 'День приема посетителей', ['text', 50], 'Вторник'],
            ['dataOffices/0/dataTab', 'offices', ['text', 50], 'offices'],
            ['dataOffices/0/dayReception', 'День приема посетителей (главный офис)', ['text', 50], '18:00'],
            ['dataOffices/0/timeMin', 'Начало приема', ['text', 50], 'Вторник'],
            ['dataOffices/0/timeMax', 'Конец приема', ['text', 50], '10:00'],
            ['dataOffices/1/dataTab', 'alpine', ['text', 50], 'alpine'],
            ['dataOffices/1/dayReception', 'День приема посетителей (Альпийская долина)"', ['text', 50], '18:00'],
            ['dataOffices/1/timeMin', 'Начало приема', ['text', 50], 'Вторник'],
            ['dataOffices/1/timeMax', 'Конец приема', ['text', 50], '10:00'],
            ['contactTable/0/title', 'Бухгалтерия', ['text', 50], 'Бухгалтерия'],
            ['contactTable/0/number', 'Бухгалтерия', ['text', 50], '+ 7 (3452) 565-787 (внутренний 301)'],
            ['contactTable/1/titleFirst', 'КПП 1 «Альпийская долина» (1 очередь)', ['text', 50], 'КПП 1 «Альпийская долина» (1 очередь)'],
            ['contactTable/1/numberFirst', '+ 7 922 268 76 52', ['text', 50], '+ 7 922 268 76 52'],
            ['contactTable/1/titleSecond', 'КПП 2 «Альпийская долина» (3 очередь)', ['text', 50], 'КПП 2 «Альпийская долина» (3 очередь)'],
            ['contactTable/1/numberSecond', '+ 7 922 268 76 56', ['text', 50], '+ 7 922 268 76 56'],
            ['contactTable/1/titleThird', 'КПП «Ёлки»', ['text', 50], 'КПП «Ёлки»'],
            ['contactTable/1/numberThird', '+ 7 932 484 15 30', ['text', 50], '+ 7 932 484 15 30'],
            ['contactTable/2/titleFirst', 'Совет собственников «Альпийская долина» (1 очередь)', ['text', 50], 'Совет собственников «Альпийская долина» (1 очередь)'],
            ['contactTable/2/emailFirst', 'ssad1@navigator-tmn.ru', ['text', 50], 'ssad1@navigator-tmn.ru'],
            ['contactTable/2/titleSecond', 'Совет собственников «Ушаково»', ['text', 50], 'Совет собственников «Ушаково»'],
            ['contactTable/2/emailSecond', 'ssus@navigator-tmn.ru', ['text', 50], 'ssus@navigator-tmn.ru'],
            ['contactTable/2/titleFirst', 'Совет собственников «Есенино»', ['text', 50], 'Совет собственников «Есенино»'],
            ['contactTable/2/emailFirst', 'sses@navigator-tmn.ru', ['text', 50], 'sses@navigator-tmn.ru'],
        ],
        'projects' => [
            ['sectionHeaderA', 'Заголовок над картой', ['text', 50], 'Коттеджные поселки на карте'],
            [
                'sectionHeaderB',
                'Заголовок над вопросами',
                ['text', 50],
                'На что стоит обратить внимание при выборе коттеджного поселка в Тюмени?'
            ],
        ],
        'ceni-na-zemelnie-uchastki' => [
            [
                'questionsTitle',
                'Заголовок над вопросами',
                ['text', 50],
                'На что стоит обратить внимание при выборе коттеджного поселка в Тюмени?'
            ],
        ],
        'special-offer' => [
            [
                'specialOfferText',
                'Текст в блоке',
                ['text', 50],
                'Как показывает опыт нашей компании, с каждым годом возрастает количество людей,
                    желающих построить собственный дом.
                    <br>
                    <br>
                    Это говорит о том, что все больше людей стремятся жить на природе, дышать свежим воздухом, растить здоровых детей и получать наслаждение от гармоничной и спокойной жизни за городом.
                    <br>
                    <br>
                    Оставьте свои контакты и эксперт по недвижимости бесплатно проконсультирует вас по выгодным вариантам инвестирования капитала.',
            ],
            [
                'specialOfferImage',
                'Изображение в "Специальное предложение"',
                ['text', 50],
                'http://placehold.it/1200x486',
            ],
        ],
        'jobs_page' => [
            [
                'titleText',
                'Заголовок страницы',
                ['text', 50],
                '«Навигатор» – молодая, энергичная, динамично развивающаяся компания. Cтроим новые коттеджные поселки, создаем инновационные проект для города,растем и развиваемся. Мы ищем лучших профессионалов в дружную компанию. И, поверьте, Вам у нас точно понравится!'
            ],
        ],
        'mapOffices' => [
            [
                'offices/main',
                'Центральный офис',
                ['text', 50],
                '57.160288,65.532908',
            ],
            [
                'offices/alpine',
                'Альпийский офис',
                ['text', 50],
                '57.255012,65.094918',
            ],
        ],
        'about_page' => [
            ['title/title', 'Заголовок страницы', ['text', 50], 'Девелоперская компания «Навигатор»'],
            [
                'title/description',
                'Описание страницы',
                ['text', 50],
                'Занимается реализацией земельных участков под ИЖС. Более 8 лет успешной работы на рынке загородной недвижимости города Тюмени.'
            ],
            [
                'imageSectionTop/image',
                'Картинка',
                ['text', 50],
                'http://placehold.it/1200x486',
            ],
            [
                'contentSectionTop/title',
                'Заголовок контента',
                ['text', 50],
                'Наша миссия',
            ],
            [
                'contentSectionTop/description',
                'Описание контента',
                ['text', 50],
                'Мы улучшаем качество жизни, создаем пространство для комфорта детей и взрослых',
            ],
            []
        ],
        'buyer_main_page' => [
            ['sectionHeader', 'Заголовок страницы', ['text', 50], 'Купить земельный участок под Тюменью - просто!'],
        ],
        'headerNumber' => [
            ['link', 'Номер телефона (ссылка)', ['text', 50], '+73452564276'],
            ['number', 'Номер телефона (текст)', ['text', 50], '+7 3452 <b>564-276</b>'],
            ['ok/link', 'Номер телефона обслуживающей компании (ссылка)', ['text', 50], '+73452564276'],
            ['ok/number', 'Номер телефона обслуживающей компании (текст)', ['text', 50], '+7 3452 <b>564-276</b>'],
        ],
        'buyer_ipoteka' => [
            ['separateParagraphTitle', 'Заголовок страницы', ['text', 50], 'Ипотека на участок'],
            [
                'separateParagraphText',
                'Описание страницы',
                ['text', 50],
                'Оформить ипотеку на покупку земельного участка вы можете в офисе компании «Навигатор». Мы предлагаем оформление ипотеки по сниженным процентным ставкам от банков-партнеров.'
            ],
            [
                'infoSection/header',
                'Блок "Список документов Заголовок',
                ['text', 50],
                'Документы, необходимые для заявки на ипотеку:.'
            ],
            ['infoSection/list/0/text', 'Документ 1', ['text', 50], 'Цветной скан всех страниц паспорта.'],
            ['infoSection/list/1/text', 'Документ 2', ['text', 50], 'Cправка 2НДФЛ за 6 месяцев.'],
            [
                'infoSection/list/1/tooltip',
                'Документ 2 Описание',
                ['text', 50],
                'Справка 2НДФЛ и копия трудовой книжки не нужны в том случае, если вы участник зарплатного проекта банка, в котором оформляете ипотеку..'
            ],
            ['infoSection/list/2/text', 'Документ 3', ['text', 50], 'Паспорт супруга/ги, если вы состоите в браке'],
            ['infoSection/list/2/tooltip', 'Документ 3 Описание', ['text', 50], 'Анкета, заполненная по форме банка.'],
            ['infoSection/list/3/text', 'Документ 4', ['text', 50], 'Документ 4'],
            ['infoSection/list/4/text', 'Документ 5', ['text', 50], 'Документ 5'],
            [
                'infoSection/description',
                'Срок рассмотрения заявки',
                ['text', 50],
                'Заявка рассматривается <span>1-5 рабочих дней.</span> После одобрения ипотеки банком, мы подписываем с вами договор купли-продажи и передаем вам земельный участок в собственность.'
            ],
            ['infoSection/image', 'Картинка', ['text', 50], 'http://source.unsplash.com/1920x1080'],
            ['infoSection/alt', 'alt', ['text', 50], 'alt'],
        ],
        'buyer_rassrochka' => [
            ['separateParagraphTitle', 'Заголовок', ['text', 50], 'Рассрочка без процентов'],
            [
                'separateParagraphText',
                'Описание',
                ['text', 50],
                'Мы всегда идем навстречу клиентам, предоставляя возможность купить земельный участок в Тюмени в благоустроенных и красивых коттеджных поселках в рассрочку на самых выгодных условиях.'
            ],
            [
                'cardLargeText',
                'Блок "Почему покупать земельный участок в рассрочку выгодно?',
                ['text', 50],
                'Вы оплачиваете земельный участок по частям,<br> в индивидуально согласованные периоды'
            ],
            [
                'sectionHeader',
                'Блок "Почему покупать земельный участок в рассрочку выгодно? Заголовок',
                ['text', 50],
                'Почему покупать земельный участок в рассрочку выгодно?'
            ],
            ['cardLargeImage', 'Картинка', ['text', 50], 'http://placehold.it/1200x486'],
        ],
        'buyer_prices' => [
            ['sectionHeaderA', 'Заголовок', ['text', 50], 'Цены на земельные участки'],
            [
                'separateParagraphTitle',
                'Блок "Отчего зависят цены?" Заголовок',
                ['text', 50],
                'Вы оплачиваете земельный участок по частям,<br> в индивидуально согласованные периоды'
            ],
            [
                'separateParagraphText',
                'Блок "Отчего зависят цены?" Описание',
                ['text', 50],
                'Почему покупать земельный участок в рассрочку выгодно?'
            ],
            ['priceListTitle', 'Список коммуникаций Заголовок', ['text', 50], 'Все коммуникации включены в стоимость'],
            ['priceListImage', 'Иконка под списком коммуникаций', ['text', 50], 'http://placehold.it/1200x486'],
            ['list/1', '1', ['text', 50], 'Газ 4м³'],
            ['list/2', '2', ['text', 50], 'Электричество 10-50 КВт'],
            ['list/3', '3', ['text', 50], 'Дороги из щебня, 6 метров в ширину'],
            ['list/4', '4', ['text', 50], 'Уличное освещение на всей территории'],
            ['list/5', '5', ['text', 50], 'Территория с КПП и охраной'],
        ],
        'feedback_questions' => [
            ['description', 'Описание', ['text', 50], 'Оставьте свой телефон и мы свяжемся с вами'],
        ],
        'feedback_form_main' => [
            ['title', 'Заголовок', ['text', 50], 'Экскурсия по загородной жизни'],
            ['description', 'Описание', ['text', 50], 'Приглашаем вас на обзорную экскурсию по загородной жизни в один из наших поселков. Заполните форму ниже, и мы вам перезвоним.'],
        ],
        '404_page' => [
            ['error', 'Код ошибки', ['text', 50], '404'],
            [
                'text',
                'Текст',
                ['text', 50],
                'Оформить ипотеку на покупку земельного участка вы можете в офисе компании «Навигатор». Мы предлагаем оформление ипотеки по сниженным процентным ставкам от банков-партнеров.'
            ],
            ['link', 'Ссылка', ['text', 50], '/'],
            ['button', 'Текст кнопки', ['text', 50], 'Перейти на главную.'],
        ],
        'footer' => [
            ['href', 'Телефон(ссылка)', ['text', 50], 'tel:+73452546276'],
            ['number', 'Телефонный номер', ['text', 50], '+ 7 (3452) 546-276'],
            ['worktime', 'Время работы', ['text', 50], 'Офис Пн - Пт: 9:00-18:00'],
            ['calltime', 'Время работы Call-центра', ['text', 50], 'Call-центр работает ежедневно с 9:00-20:00'],
            ['address', 'Адрес', ['text', 50], 'г. Тюмень, ул. Семакова, 2/1'],
            ['url', 'Ссылка', ['text', 50], '/about/contact'],
            [
                'informationSubItem/0',
                'Инфорамация 1',
                ['text', 50],
                '2012 - 2019. ООО «Навигатор. Управление активами»'
            ],
            ['informationSubItem/1', 'Инфорамация 2', ['text', 50], '2019 Навигатор по загородной недвижимости'],
            ['policy', 'Ссылка на файл Политики', ['text', 50], ''],
            ['forms/policy', 'Ссылка на файл Политики(в том чмсле и для форм)', ['text', 50], ''],
            [
                'offer',
                'Мелкий текст',
                ['text', 50],
                'Обращаем Ваше внимание на то, что данный сайт носит исключительно информационный характер и ни при каких условиях информационные материалы и цены, размещенные на сайте, не являются публичной офертой. Девелоперская компания "Навигатор" имеет право изменять стоимость объектов.'
            ]
        ],
        'social' => [
            ['vkontakte', 'vkontakte', ['text', 50], 'https://vk.com/navigatortyumen'],
            ['odnoklassniki', 'odnoklassniki', ['text', 50], 'https://www.ok.ru/group/54073117049025'],
            ['facebook', 'facebook', ['text', 50], 'https://www.facebook.com/navigator72/'],
            ['youtube', 'youtube', ['text', 50], 'https://www.facebook.com/navigator72/'],
            ['instagram', 'instagram', ['text', 50], 'https://www.facebook.com/navigator72/'],
            ['facebook', 'facebook', ['text', 50], 'https://www.facebook.com/navigator72/'],
        ],
        'captcha' => [
            ['recaptchaKey', 'Ключ', ['text', 50], '6LfD5MYaAAAAAHqjw6hL0jEDF8sGe_wZKMsXXmZx'],
            ['recaptchaPrivateKey', 'Приватный ключ', ['text', 50], '6LfD5MYaAAAAACzQFUi3yESYcP4ye05r3DRhHPHw'],
        ],
        'mailer' => [
            ['smtpHost', 'Хост', ['text', 50], 'smtp.yandex.ru'],
            ['smtpAuth', 'Enable SMTP authentication', ['checkbox'], true],
            ['Username', 'Логин', ['text', 50], 'navigator.testmail'],
            ['Password', 'Пароль', ['text', 50], 'IQDevelopment'],
            ['SMTPSecure', 'ssl', ['text', 50], 'ssl'],
            ['port', 'Порт', ['text', 50], '465'],
            ['From', 'Отправитель', ['text', 50], 'Навигатор'],
            ['FromName', 'Имя отправителя', ['text', 50], 'Навигатор'],
            ['isHTML', 'Использовать HTML', ['checkbox'], true],
            ['botToken', 'Код telegram-бота', ['text', 50], ''],
            ['idGroup', 'id группы', ['text', 50], ''],

        ],
        'scripts' => [
            ['headHtml', 'Вставляется в раздел &#60;head&#62; выше всех скриптов', ['textarea', 5], ''],
            ['bodyHtml', 'Вставляется сразу после открывающего тега &#60;body&#62;', ['textarea', 5], ''],
        ],
    ];

    public static $aTabs = [
        [
            "DIV" => "main_page",
            "TAB" => 'Главная страница',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Главная страница'
        ],
        [
            "DIV" => "ok_page",
            "TAB" => 'Обслуживающая компания',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Обслуживающая компания'
        ],
        ["DIV" => "about_page", "TAB" => 'О компании', "ICON" => "perfmon_settings", "TITLE" => 'О компании'],
        ["DIV" => "buyer_main_page", "TAB" => 'Покупателям', "ICON" => "perfmon_settings", "TITLE" => 'О компании'],
        [
            "DIV" => "buyer_ipoteka",
            "TAB" => 'Покупателям (ипотека)',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Покупателям (ипотека)'
        ],
        ["DIV" => "jobs_page", "TAB" => 'Вакансии', "ICON" => "perfmon_settings", "TITLE" => 'Вакансии'],
        ["DIV" => "projects", "TAB" => 'Проекты', "ICON" => "perfmon_settings", "TITLE" => 'Проекты'],
        [
            "DIV" => "ceni-na-zemelnie-uchastki",
            "TAB" => 'Выбор участка',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Выбор участка'
        ],
        ["DIV" => "404_page", "TAB" => 'Страница 404', "ICON" => "perfmon_settings", "TITLE" => 'Страница 404'],
        [
            "DIV" => "special-offer",
            "TAB" => 'Специальное предложение',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Специальное предложение',
        ],
        ["DIV" => "footer", "TAB" => 'Подвал сайта', "ICON" => "perfmon_settings", "TITLE" => 'Подвал сайта'],
        [
            "DIV" => "headerNumber",
            "TAB" => 'Контакты в шапке',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Контакты в шапке'
        ],
        ["DIV" => "social", "TAB" => 'Социальные сети', "ICON" => "perfmon_settings", "TITLE" => 'Социальные сети'],
        [
            "DIV" => "buyer_rassrochka",
            "TAB" => 'Покупателям. Рассрочка',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Покупателям. Рассрочка'
        ],
        [
            "DIV" => "buyer_prices",
            "TAB" => 'Покупателям. Цены',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Покупателям. Цены'
        ],[
            "DIV" => "mapOffices",
            "TAB" => 'Настройки карты',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Настройки карты'
        ],
        [
            "DIV" => "feedback_questions",
            "TAB" => 'Вопросы - форма обратной связи',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Вопросы - форма обратной связи',
        ],
        [
            "DIV" => "feedback_form_main",
            "TAB" => 'Форма обратной связи на главной странице',
            "ICON" => "perfmon_settings",
            "TITLE" => 'Форма обратной связи на главной странице',
        ],

        ["DIV" => "captcha", "TAB" => 'reCAPTCHA', "ICON" => "perfmon_settings", "TITLE" => 'reCAPTCHA'],
        ["DIV" => "mailer", "TAB" => 'Почта', "ICON" => "perfmon_settings", "TITLE" => 'Почта'],
        ["DIV" => "scripts", "TAB" => 'Скрипты', "ICON" => "perfmon_settings", "TITLE" => 'Скрипты'],
        ["DIV" => "access", "TAB" => 'Доступ', "ICON" => "perfmon_settings", "TITLE" => 'Настройки доступа'],

    ];

    public static function getPageOptions($page)
    {
        $cache = \Bitrix\Main\Application::getInstance()->getManagedCache();
        $cacheId = 'page_options_' . $page;
        if ($cache->read(3600 * 24, $cacheId)) {
            $result = $cache->get($cacheId); // достаем переменные из кеша
        } else {
            foreach (self::$allOptions[$page] as $option) {
                if (strpos($option[0], '/')) {
                    $keys = explode('/', $option[0]);
                    /*     $count = count($keys);
                    $arrPrev =[];
                    $arrNew  =[];
                    $arrPrev[$keys[$count-1]] = \COption::GetOptionString('iqdev.options', $page . '.' . $option[0]);
                    for ($i = count($keys)-2; $i >= 0; $i--) {
                        $arrNew = [$keys[$i] => $arrPrev];
                        $arrPrev = $arrNew;
                    }
                   $result = array_merge($result, $arrNew);*/
                    switch (count($keys)) {
                        case 4:
                            $result[$keys[0]][$keys[1]][$keys[2]][$keys[3]] = \COption::GetOptionString('iqdev.options',
                                $page . '.' . $option[0]);
                            break;
                        case 3:
                            $result[$keys[0]][$keys[1]][$keys[2]] = \COption::GetOptionString('iqdev.options',
                                $page . '.' . $option[0]);
                            break;
                        case 2:
                            $result[$keys[0]][$keys[1]] = \COption::GetOptionString('iqdev.options',
                                $page . '.' . $option[0]);
                            break;
                    }
                } else {
                    $result[$option[0]] = \COption::GetOptionString('iqdev.options', $page . '.' . $option[0]);
                }
            }
            $cache->set($cacheId, $result); // записываем в кеш
        }
        return $result;
    }
}
