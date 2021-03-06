<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'smartMeeting',
    'language' => 'th_TH',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'meeting' => [
            'class' => 'backend\modules\meeting\components\Meeting',
        ],
        // 'urlManager' => [
        //     'class' => 'yii\web\UrlManager',
        //     'enablePrettyUrl' => false,
        //     'showScriptName' => true, 
        // ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
];