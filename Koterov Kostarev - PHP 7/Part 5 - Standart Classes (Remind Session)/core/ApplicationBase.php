<?php

namespace core;

require_once "ApplicationBaseInterface.php";
require_once "TSingleton.php";


class ApplicationBase implements IApplicationBase
{
    # TRAITS --------------------------------------------------

    use TSingleton;

    # DATA SECTION -----------------------------------------------

    protected $id = -1;

    # CONSTRUCT --------------------------------------------------

    public function __construct()
    {
        $this->id = date('Y.M.d H:i:s');
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    # MAIN INTERFACE --------------------------------------------------

    public function getID(): string
    {
        return $this->id;
    }

    public function WriteLine(string $str): void
    {
        echo $str."<br/>\n";
    }

    public function WriteData(string $data): void
    {
        echo "<pre>\n";
        echo $data."<br/>\n";
        echo "</pre>\n";
    }

    public function WriteArray(array $arr): void
    {
        echo "<pre>\n";
        echo print_r($arr, true)."<br/>\n";
        echo "</pre>\n";
    }
}