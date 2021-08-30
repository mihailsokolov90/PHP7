<?php

namespace core;

require_once ("IApplication.php");
require_once ("TSingleton.php");


abstract class ApplicationBase implements IApplication
{
    use TSingleton;

    protected function __construct()
    {
        # Protected Constructor for Singleton Trait
    }

    public function exec()
    {
        self::WriteHeader("Make implementation");
    }

    public static function Title()
    {
        return "Need implementation";
    }

    public static function WriteLine(string $str)
    {
        echo $str."<br/>\n";
    }

    public static function WriteError($err)
    {
        echo "<span style='color: #ff1201; border: 1px solid lightgray; background-color: #cff4fc;'>".$err."</span><br>\n";
    }

    public static function WriteHeader(string $str, int $level = 4)
    {
        echo "<h".$level.">".$str."</h".$level.">\n";
    }

    public static function WriteArray(array $arr): void
    {
        echo "<pre>\n";
        echo htmlentities( print_r($arr, true) );
        echo "</pre>\n";
    }

    public static function WritePreData(string $str): void
    {
        echo "<pre>\n";
        echo $str."<br/>\n";
        echo "</pre>\n";
    }
}