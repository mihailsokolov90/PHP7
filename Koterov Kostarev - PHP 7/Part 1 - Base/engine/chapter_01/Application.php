<?php

namespace ch1;

define('__ROOT__', dirname(dirname(__FILE__)));

require_once (__ROOT__."/core/ApplicationCore.php");


class Application extends \core\ApplicationCore
{
    protected function __construct()
    {
        parent::__construct();

        $this->_title = "Chapter 1";
    }
}