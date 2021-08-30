<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 11.02.2019
 * Time: 15:25
 */

namespace core;

use common\TSingleton;

require_once "common/TSingleton.php";


class ApplicationBase
{
    # TRAITS --------------------------------------------------------------------

    use TSingleton;

    # INIT --------------------------------------------------------------------

    public function __construct()
    {
        $this->_header = "Base Application";
        $this->_theme = "Base theme";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function Exec()
    {
        echo "<h2>Make implementation...</h2>";
    }

    public static function CreateInstance()
    {
        return new static();
    }


    # PROPERTIES
    # -------------------------------------------------
    public function Header()
    {
        return $this->_header;
    }

    public function Theme()
    {
        return $this->_theme;
    }

    public function beginIndent()
    {
        echo "<p>\n";
    }

    public function endIndent()
    {
        echo "</p>\n";
    }

    public function PrintArray($arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    public function PrintArrayLn($arr)
    {
        echo "<p>\n";

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        echo "</p>\n";
    }

    public function PrintHeader4($str)
    {
        echo "<h4>$str</h4>";
    }

    public function PrintHeaderLevel($str, $level = 5)
    {
        echo "<h${level}>$str</h${level}>";
    }

    public function WriteLine(string $str)
    {
        echo $str."<br/>";
    }

    public function WriteData($mixed)
    {
        echo "<pre>\n";
        print_r($mixed);
        echo "</pre>\n";
    }

    public function WritePreData($mixed)
    {
        echo "<pre>\n";
        echo $mixed;
        echo "</pre>\n";
    }

    public function WriteDataLine($mixed)
    {
        echo "<pre>\n";
        print_r($mixed);
        echo "</pre><br/>\n";
    }

    # DATA
    # -------------------------------------------------
    protected $_header;
    protected $_theme;
}