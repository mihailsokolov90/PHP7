<?php

namespace core;

require_once "ISingleton.php";
require_once "IApplicationCore.php";
require_once "TSingleton.php";


class ApplicationCore implements ISingleton, IApplicationCore
{
    use TSingleton;

    # FIELDS ------------------------------------------------------------
    protected static $_title = "No";
    protected static $_module = "No name";

    # CTOR --------------------------------------------------------------

    protected function __construct()
    {

    }

    # EXEC --------------------------------------------------------------

    public function Exec()
    {
        self::writeHeader(self::$_module, 4);
    }

    # Application Interface --------------------------------------------------------------

    public static function Title(): string
    {
        return self::$_title;
    }

    public static function Module(): string
    {
        return self::$_module;
    }

    public static function writeHeader(string $str, int $lvl = 5): void
    {
        echo "<h".$lvl.">".$str."</h".$lvl.">\n";
    }

    public static function writeLine(string $str): void
    {
        echo $str."<br/>\n";
    }

    public static function writeArray(array $arr): void
    {
        echo "<pre>\n";
        echo print_r($arr, true)."\n";
        echo "</pre>\n";
    }

    public static function writeData(mixed $obj): void
    {
        echo "<pre>\n";
        var_dump($obj)."\n";
        echo "</pre>\n";
    }
}