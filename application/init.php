<?php

// It's define path 

define("SITE_PATH", "http://localhost/systemcms");
define("APP_PATH", str_replace("\\","/",dirname(__FILE__)."/"));
define("APP_STYLE", "http://localhost/systemcms/application/style/");

//It's define params for database

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'cms_vds';

//I hand on this params to constract to class config

include(APP_PATH.'config/config.php');
$CMS = new Config($server, $user, $pass, $db);

