<?php
/**
*代码入口,20130702-lx
*/
header ( "Content-Type:text/html; Charset=utf-8" );
require('./config.inc.php');
define('APP_DEBUG',true);
define('APP_NAME', 'front');
define('APP_PATH', './front/');
require( "./Core/ThinkPHP.php");