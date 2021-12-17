<?php


namespace core;


trait TSingleton
{
    protected static $self = null;

    /**
     * @return null
     */
    public static function instance()
    {
        if( self::$self === null )
        {
            self::$self = new static();
        }
        return self::$self;
    }
}