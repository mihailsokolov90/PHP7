<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 10.03.2021
 * Time: 16:20
 */

namespace ch25;

define('__ROOT__', dirname( dirname(__FILE__) ));

require_once "ExceptionaizerWorker.php";
require_once "ExceptionaizerExceptions.php";


class Exceptionaizer
{
    protected static $_exec = null;

    protected $_worker = null;

    # CONSTRUCT ------------------------------------------------------------

    public static function Install()
    {
        self::$_exec = new Exceptionaizer();
    }

    public static function Restore()
    {
        if( self::$_exec !== null )
        {
            self::$_exec = null;
        }
    }

    # INIT ------------------------------------------------------------------

    public function __construct()
    {
        $this->_worker = new ExceptionaizerWorker();

        set_error_handler([$this->_worker, "ErrorHandler"]);

        echo "ExceptionaizerWorker Installed!<br>\n";
    }

    public function __destruct()
    {
        $this->_worker = null;
    }
}