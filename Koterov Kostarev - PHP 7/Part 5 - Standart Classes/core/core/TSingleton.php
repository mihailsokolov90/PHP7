<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 26.04.2021
 * Time: 15:36
 */

namespace core;


trait TSingleton
{
    private static $_instance = null;

    public static function getInstance()
    {
        if( self::$_instance === null )
        {
            self::$_instance = new static();
        }

        return self::$_instance;
    }
}