<?php

require 'functions/Database.singleton.php';
require 'functions/themeFunctions.php';
define('DB_DATABASE','pixeltest');
define('DB_USER','root');
define('DB_PASS','');
define('DB_SERVER','localhost');


$db = Database::obtain(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$db->connect();
