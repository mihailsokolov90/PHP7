<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 26.11.2019
 * Time: 15:04
 */

namespace core;

require_once  "FileLogger.php";


use core\chapter23\FileLogger;

class FileLoggerDebug extends FileLogger
{
    public function __construct($path, $name)
    {
        try {
            parent::__construct($path, $name);
        }
        catch (\Exception $e)
        {
            die("Stop working, exception: ".$e->getMessage());
        }
    }

    public function debug($msg, $level = 0)
    {
        $stack = debug_backtrace();
        $file = basename( $stack[$level]['file'] );
        $line = $stack[$level]['line'];

        $this->Log("[$file at line: $line] $msg\n");
    }

    public function BacktraceInfo()
    {
        $stack = debug_backtrace();

        echo "<pre>";
        print_r($stack);
        echo "</pre>";
        echo "<br/>";
    }
}