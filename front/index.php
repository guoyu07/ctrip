<?php
/**
*前台入口20130313 lx
*/
header ( "Content-Type:text/html; Charset=utf-8" );
require('../config.inc.php');
define('APP_DEBUG',TRUE);
define('APP_NAME', 'front');
define('APP_PATH', './');
require( "../Core/ThinkPHP.php");