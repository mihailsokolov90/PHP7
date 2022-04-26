<?php

namespace core;

require_once "ISingleton.php";
require_once "TSingleton.php";


class ApplicationCore implements ISingleton
{
    use TSingleton;

    # FIELDS ------------------------------------------------------------
    protected $_title = "No";
    protected $_appName = "No name";

    # CTOR --------------------------------------------------------------

    protected function __construct()
    {

    }

    # EXEC --------------------------------------------------------------

    public function Exec()
    {

    }
}