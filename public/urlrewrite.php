<?php
$arUrlRewrite = [
    [
        'CONDITION' => '#^/about/our-news/#',
        'RULE' => 'ID=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/about/our-news/detail/index.php',
        'SORT' => 100,
    ],
    [
        'CONDITION' => '#^/about/istorii-nashih-zhitelej/#',
        'RULE' => 'ID=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/about/istorii-nashih-zhitelej/detail/index.php',
        'SORT' => 100,
    ],
];