<?php

namespace core;

require_once "IApplicationCore.php";
require_once "ISingleton.php";


class ApplicationCore implements IApplicationCore, ISingleton
{
    # Traits --------------------------------------------------
    use TSingleton;

    # Fields --------------------------------------------------

    # Ctor --------------------------------------------------
    protected function __construct()
    {
        //
    }

    # Properties --------------------------------------------------
    public static function Title(): string
    {
        return "Chapter 1: Bases of Internet";
    }

    # Base Methods --------------------------------------------------
    public function Exec()
    {
        echo phpinfo();
    }
}