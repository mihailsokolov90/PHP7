<?php

namespace core;

trait TSingleton
{
    protected static $_instance = null;

    public static function getInstance()
    {
        if( self::$_instance === null )
        {
            self::$_instance = new static();
        }

        return self::$_instance;
    }
}