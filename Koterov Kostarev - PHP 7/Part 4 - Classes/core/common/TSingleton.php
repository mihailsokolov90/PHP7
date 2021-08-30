<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 10.03.2021
 * Time: 16:22
 */

namespace common;


trait TSingleton
{
    protected static $_instance = null;

    public static function getInstance()
    {
        if( self::$_instance === null )
        {
            self::$_instance = new static;
        }

        return self::$_instance;
    }
}