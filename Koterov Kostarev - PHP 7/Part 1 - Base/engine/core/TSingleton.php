<?php

namespace core;

require_once "ISingleton.php";

trait TSingleton
{
    protected static $_instance = null;

    /**
     * @return null
     */
    public static function getInstance()
    {
        if( self::$_instance === null )
        {
            self::$_instance = new static();
        }
        return self::$_instance;
    }
}