<?php

if(function_exists($action))
    $action($item);
else   
    echo 'Oops';


function read($item)
{  
    $pid = (int)$item;
    if($pid > 0)
    {
        $pixel = Pixel::obtain();
        print_r($pixel->getPixelById($item)) ;    
    }
    else 
    {
        echo 'OOPPSss - you are trying to get smart';
    }
        
}