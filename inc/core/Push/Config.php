<?php return [
    'platform' => 3,
    'id' => 'push',
    'folder' => 'core',
    'name' => 'Web Push Notification',
    'author' => 'Stackcode',
    'author_uri' => 'https://stackposts.com',
    'desc' => 'Customize system interface',
    'icon' => 'fad fa-bell-on',
    'color' => '#0040ff',
    'show_plan' => true,
    'menu' => [
        'custom' => 'Core\Push\Controllers\Push::sidebar',
        'tab' => 1,
        'type' => 'top',
        'position' => 100000,
        'name' => 'Web Push Notification',

    ],
    'parent' => [
        'id' => '',
        'name' => '',
        'position' => 200
    ],
    'js' => 
    [
        0 => 'Assets/js/push.js',
    ],
    'cron' => [
        'name' => 'Web Push Composer',
        'uri' => 'push/cron',
        'style' => '* * * * *',
    ]
];