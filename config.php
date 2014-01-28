<?php

require 'functions/Database.singleton.php';
require 'functions/pixel.singelton.php';
require 'functions/themeFunctions.php';

if($_SERVER['SERVER_NAME'] == 'pixel.spotoption.com'){
	define('DB_DATABASE','spotpixel_pixel');
	define('DB_USER','spotpixel_twodiv');
	define('DB_PASS','9sHPhlDADUbBtGdnm1io');
	define('DB_SERVER','localhost');

}
else
{
	define('DB_DATABASE','pixeltest');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_SERVER','localhost');
}

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('SALTKEY', 'OncleMosesHadAFarm');
define('OLDSALT','AndInTheFarmHeHadAHourse');

$db = Database::obtain(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$db->connect();
