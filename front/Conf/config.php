<?php
//sys config
$config =  array(
        'APP_DEBUG' => FALSE,
        'DB_CHARSET' => "utf8",
        'DB_TYPE' => "mysql",
        'DB_HOST' => '127.0.0.1',
        'DB_PORT' => '3306',
        'DB_NAME' => 'mytest',
        'DB_USER' => 'test',
        'DB_PWD' => 'test',
        'DB_PREFIX' => '',
        
        'URL_MODEL' => 2,
        'URL_CASE_INSENSITIVE' => TRUE,
        'URL_HTML_SUFFIX' => ".html",

        'URL_404_REDIRECT'=> "/404.html",
        
        'TOKEN_ON' => FALSE,
        'SHOW_ERROR_MSG' =>false
);
//extends config
$config["TRIP_DB_PREFIX"] = "mytest_";
$config["TRIP_SITEURL"] = "www.test.com";
$config["TRIP_SITENAME"] = "test";
return $config;
