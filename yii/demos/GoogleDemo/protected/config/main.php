<?php 
return array(
    'import' => array(
        'application.models.*'
    ),

    'components' => array(
        'user' => array(
            'allowAutoLogin' => true,
        ),

        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=medkee',
            'username' => 'demo',
            'password' => 'long123',
            'charset' => 'utf8',
            'emulatePrepare' => true,
            ),

        // 'urlManager' => array(
        //     'urlFormat' => 'path',
        //     'rules' => array(
        //         '<controller:\w+>/<id:\d+>' => '<controller>/view',
        //         '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        //         '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        //     ),
        //     'showScriptName' => false,
        // ),
    )
);

?>