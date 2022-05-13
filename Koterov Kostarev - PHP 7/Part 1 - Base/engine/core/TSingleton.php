<?php
/*
 * @brief - Singleton trait
 */

namespace core;

trait TSingleton
{
    protected static $m_instance = null;

    public static function getInstance()
    {
        if( self::$m_instance === null )
        {
            self::$m_instance = new static();
        }

        return self::$m_instance;
    }
}