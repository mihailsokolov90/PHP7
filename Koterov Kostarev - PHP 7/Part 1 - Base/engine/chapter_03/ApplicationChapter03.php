<?php

namespace ch3;

require_once (dirname(dirname(__DIR__))."/engine/core/ApplicationCore.php");


class ApplicationChapter03 extends \core\ApplicationCore
{
    protected function __construct()
    {
        parent::__construct();

        $this->_title = 'Chapter 3: Empty';
    }

    public function Exec(): void
    {
        self::WriteHeader("Chapter 3");

        self::WriteLine("Some data for write...");
    }
}