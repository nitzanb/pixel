<?php 
require 'config.php';

$url = trim($_SERVER['REQUEST_URI'] , '/');

$parms = explode( '/', $url);
if (!empty($parms))
    list($handler, $action, $item) = array_pad($parms, 3, -1);



include 'template/header.php';



include 'view/'.$handler.'.php' ;

include 'template/footer.php' ;

?>      
 