<?php

class User
{
    private static $instance;
    private static $props;
    private static $locker = false;


    private function __construct($uid = null)
    {
        if(!self::$locker && $uid != null )
            {
                self::$props = getUserById($uid);
                self::$locker = true;
            }
    }
    
    public static function obtain($uid = null)
    {
        if (!self::$instance){ 
		self::$instance = new User(); 
	} 
	return self::$instance;         
    }
    
    public static function getUserById($uid)
    {
        $db=Database::obtain();
        $sql = "SELECT * FROM `users` WHERE `id` = ". $uid ;
        $row = $db->query_first($sql);
        if(!empty($row['pid']))
            return $row;
        else
            return false;
    }
    
    public static function changePassword($old, $new)
    {
        
    }
    
    private static function validatePassword($password) {
        $encryptedPassword = md5(SALTKEY . $password);
        
    }
    
    
}