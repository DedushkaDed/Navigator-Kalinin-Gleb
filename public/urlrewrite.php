<?php
$arUrlRewrite = [
    [
        'CONDITION' => '#^/about/our-news/#',
        'RULE' => 'ID=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/about/our-news/detail/index.php',
        'SORT' => 100,
    ],
];