<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.10.2019
 * Time: 16:26
 */

namespace core\chapter22;


use http\Exception;

class FileLogger
{
    const DEFAULT_NAME = "logger.log";

    public function __construct($path, $name)
    {
        $this->ready = false;
        $this->FILE = fopen($path, "a+");

        if( $this->FILE === false ) {
            throw new \Exception("File not found: " . $path);
        }

        $this->fpath = $path;
        $this->name = $name;
        $this->ready = true;
        $this->data = array();

        self::$mCounter += 1;
    }

    public function __destruct()
    {
        self::Close();
    }

    public function Log($info)
    {
        if( !$this->ready ) return;

        $prefix = date('Y.m.d_H:i:s').":[ ".$this->name." ] =>";

        $ret = preg_replace('/^/m', $prefix.'$0', rtrim($info));

        $this->data[] = $ret;
    }


    public function Close()
    {
        if( $this->ready === true )
        {
            for( reset($this->data); ($s = current($this->data)) !== false; next($this->data) )
            {
                fputs($this->FILE, $s);
            }

            fclose($this->FILE);
            $this->ready = false;
        }
    }

    public function CountInstances()
    {
        return self::$mCounter;
    }

    public function __get($name)
    {
        echo "Перехват несуществующего свойства (получение) -> ".$name;
        return null;
    }

    public function __set($name, $value)
    {
        echo "Перехват несуществующего свойства (установка значения) -> ".$name." = ".$value;
        return self::$vars[$name] = $value;
    }

    public function __call($name, $arguments)
    {
        $sig = 'function '.$name."(";
        foreach ($arguments as $v)
        {
            $sig .= "$v, ";
        }
        $sig .= ")";

        echo "Вызов несуществующего метода с агрументами -> ".$sig;

        return 0;
    }


    private $FILE;
    private $fpath;
    private $data;
    private $name;
    private $ready;

    private static $mCounter = 0;
    private static $vars = [];
}