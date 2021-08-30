<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 03.06.2021
 * Time: 10:30
 */

namespace core;

use core\ApplicationBase;

require_once ("ApplicationBase.php");


class ApplicationChapter_30 extends ApplicationBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Exec()
    {
        self::TestReflection();
    }

    public function TestReflection()
    {
        self::PrintHeader4("Reflection Api Test");

        function SomeRefFun(string $which, ApplicationBase $ths)
        {
            $ths->WriteLine("This is test of $which parameter");
        }

        $refl = new \ReflectionFunction("core\SomeRefFun");

        self::WriteLine("Reflection function: ".$refl->__toString());
        self::WriteLine("Count of arguments: ".$refl->getNumberOfParameters());

        $refl->invokeArgs(["Param#1", $this]);

    }

    public function reflectionTest()
    {
        self::PrintHeader4("");

        $vars = [];
        foreach (get_loaded_extensions() as $extension)
        {
            $ext = new \ReflectionExtension($extension);
            $vars = array_merge($vars, $ext->getConstants());
        }

        echo "<pre>";
        var_dump($vars);
    }
}