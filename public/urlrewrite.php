<?php
$arUrlRewrite = [
    [
        'CONDITION' => '#^/about/our-news/([a-zA-Z0-9-]+)/.*#',
        'RULE' => 'CODE=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/about/our-news/index.php',
        'SORT' => 100,
    ],
    [
        'CONDITION' => '#^/about/istorii-nashih-zhitelej/([a-zA-Z0-9-]+)/.*#',
        'RULE' => 'CODE=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/about/istorii-nashih-zhitelej/index.php',
        'SORT' => 100,
    ],
    [
        'CONDITION' => '#^/blog/([a-zA-Z0-9-]+)/.*#',
        'RULE' => 'CODE=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/blog/index.php',
        'SORT' => 100,
    ],
];
