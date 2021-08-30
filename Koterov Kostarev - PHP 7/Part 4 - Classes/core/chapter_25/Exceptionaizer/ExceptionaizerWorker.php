<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 11.03.2021
 * Time: 15:37
 */

namespace ch25;

require_once "ExceptionaizerExceptions.php";


class ExceptionaizerWorker
{
    protected $_mask = E_ALL;
    protected $_types = [];

    public function __construct($mask = E_ALL)
    {
        $this->_mask = $mask;

        $this->_types = array(
            "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR",
            "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING",
            "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT"
        );
    }

    public function __destruct()
    {
        restore_error_handler();
    }

    public function ErrorHandler($code, $message, $file, $line)
    {
        echo "ErrorHandler: error $code -> $message </br>\n";
        echo "error_reporting: ".error_reporting()."<br>\n";

        if( error_reporting() === 0 )
            return false;

        echo "Types: ".count($this->_types)."<br>\n";

        foreach ($this->_types as $type)
        {
            $t = constant($type);
            //if( $t === null ) continue;

            echo "test: ".($t & $this->_mask)."<br>\n";

            if( $t & $this->_mask )
            {
                $classname = $type."_EXCEPTION";

                echo "Generate $classname <br>\n";
                throw new $classname($code, $message, $file, $line);
                break;
            }
        }

        return true;
    }
}