<?php
    
    require 'config.php';
    
    
    $data = array("clientIp" => $_SERVER['REMOTE_ADDR'], "type" =>'server');
    $primary_id = $db->insert("pixeltrack", $data);
    
    $params = array();
    
    foreach ($_GET as $key => $value)
          $db->insert('pixelData', array(  "pixelId" => $primary_id,
                                                        "metaKey" => $key,
                                                        "metaValue"=>$value             
                                                    )         
                 );
       
    
    
?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
        <title></title>
    </head>
    <body>
        <?php
        echo  $primary_id;
        ?>
    </body>
</html>
