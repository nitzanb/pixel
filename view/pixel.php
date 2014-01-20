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


function create()
{
    $params = array(    'lid' => array(),
                        'player' => array('firstname'=>'%FIRSTNAME%',
                                                'lastname' => '%LASTNAME%', 
                                                'pid'=>'%ID%',
                                                'mail'=> '%EMAIL%', 
                                                'phone'=>'%PHONE%',
                                                'campaign'=> '%CAMPAIGNID%',
                                                'Param'=>'%PARAM%',
                                                'amount'=>'%DEPOSITAMOUNT%',
                                                'transaction' => '%TRANSACTIONID%',
                                            ),
                        'customer' => array(    'firstname'=>'%FIRSTNAME%',
                                                'lastname' => '%LASTNAME%', 
                                                'pid'=>'%ID%',
                                                'mail'=> '%EMAIL%', 
                                                'phone'=>'%PHONE%',
                                                'campaign'=> '%CAMPAIGNID%',
                                                'Param'=>'%PARAM%'),
                        'visitor' => array()
                        
    );
    
    if(isset($_POST) && !empty($_POST)):
        
        $pixel = array();
        foreach ($params as $type=>$params)
        {
            $string = "";
            foreach($params as $key=>$val)
                {
                  $string .= "&$key=$val"  ;
                }
            $pixel[$type] = "?wlname=".$_POST['inputLabelName'] . $string;
        }
        
        print_r($pixel);
                
               
       
    endif;
      
    include '/../template/addNewPixel.php';
    
}