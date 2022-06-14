<?php

namespace core;

//! [ Global ]
define('__ROOT__', dirname(dirname(__DIR__)));
//! [ Traits ]
require_once (__ROOT__."/engine/core/TSingleton.php");
//! [ Interfaces ]
require_once (__ROOT__."/engine/core/ISingleton.php");
require_once (__ROOT__."/engine/core/IApplicationCore.php");


class ApplicationCore implements ISingleton, IApplicationCore
{
    use TSingleton {
        TSingleton::getInstance as instance;
    }

    // FIELDS ---------------------------------------------------------------------------
    protected string $_title = "Empty";

    // INIT ------------------------------------------------------------------------------
    #CTOR
    protected function __construct()
    {
        $this->_title = "Need Implementation";
    }

    // IApplicationCore ------------------------------------------------------------------

    public function Exec(): void
    {
        self::WriteHeader("Need implementation in child classes", 4);
    }

    public function Title(): string
    {
        return $this->_title;
    }

    public static function WriteLine(string $str)
    {
        echo $str."<br/>\n";
    }

    public static function WriteHeader(string $hr, int $level = 5)
    {
        echo "<h".$level.">".$hr."</h".$level.">\n";
    }

    public static function WriteArray(array $arr)
    {
        echo "<pre>\n";
        var_dump($arr);
        echo "</pre>\n";
    }

    public static function WriteData(mixed $data)
    {
        echo "<pre>\n";
        var_dump($data);
        echo "</pre>\n";
    }
}