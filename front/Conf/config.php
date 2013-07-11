<?php
//sys config
$config =  array(
        'APP_DEBUG' => FALSE,
        'DB_CHARSET' => "utf8",
        'DB_TYPE' => "mysql",
        'DB_HOST' => '127.0.0.1',
        'DB_PORT' => '3306',
        'DB_NAME' => 'myctrip',
        'DB_USER' => 'boy',
        'DB_PWD' => 'boy',
        'DB_PREFIX' => '',
        
        'URL_MODEL' => 2,
        'URL_CASE_INSENSITIVE' => TRUE,
        'URL_HTML_SUFFIX' => ".html",

        'URL_404_REDIRECT'=> "/404.html",
        
        'TOKEN_ON' => FALSE,
        'SHOW_ERROR_MSG' =>false
);
//extends config
$config["TRIP_DB_PREFIX"] = "ctrip_";
$config["TRIP_SITEURL"] = "www.myctrip.com";
$config["TRIP_SITENAME"] = "ÂÃÐÐÍø";
return $config;
;
