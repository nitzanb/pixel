<?php 
require 'config.php';

$url = trim($_SERVER['REQUEST_URI'] , '/');

$parms = explode( '/', $url);
if (!empty($params))
    list($handler, $item, $action) = $parms;


include 'template/header.php';

//include 'template/home.php' ;
include 'template/pixels.php' ;

include 'template/footer.php' ;

?>      
 