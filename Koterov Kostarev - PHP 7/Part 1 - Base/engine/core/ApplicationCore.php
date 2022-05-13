<?php

namespace core;

//define('__ROOT__', dirname( dirname(__FILE__) ));

require_once ("TSingleton.php");
require_once ("ISingleton.php");
require_once ("IApplicationCore.php");


class ApplicationCore implements ISingleton, IApplicationCore
{
    use TSingleton
    {
        TSingleton::getInstance as instance;
    }

    # Fields ------------------------------------------------------------------------
    protected string $_title = "No";

    # Ctor ------------------------------------------------------------------------
    protected function __construct()
    {
        $this->_title = "Create chapter instance";
    }

    # IApplicationCore ------------------------------------------------------------------------

    public function Exec(): void
    {
        self::WriteHeader($this->_title);
        // TODO: Implement Exec() method.
    }

    public function Title(): string
    {
        return $this->_title;
    }

    public static function WriteHeader(string $hr, int $level = 4): void
    {
        echo "<h".$level.">".$hr."</h".$level.">\n";
    }

    public static function WriteLine(string $str, bool $indent = false): void
    {
        if( $indent ) echo "<p>\n";
        echo $str."<br/>\n";
        if( $indent ) echo "</p>\n";
    }

    public static function WriteArray(array $arr): void
    {
        // TODO: Implement WriteArray() method.
    }

    public static function WriteData(mixed $data): void
    {
        // TODO: Implement WriteData() method.
    }
}