<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    
    
}