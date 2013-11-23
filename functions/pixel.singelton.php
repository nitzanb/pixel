<?php

require_once 'Database.singleton.php';

class Pixel
{
    private static $instance;
    
    private function __construct()
    {
        
    }
    
    public static function obtain()
    {
        if (!self::$instance){ 
		self::$instance = new Pixel(); 
	} 
	return self::$instance;         
    }
    
    public static function getPixelById($pid)
    {
        $db=Database::obtain();
        $sql = "SELECT * FROM `pixel` WHERE `pid` = ". $pid ;
        $row = $db->query_first($sql);
        if(!empty($row['pid']))
            return $row;
        else
            return false;
    }
    
    
    
}