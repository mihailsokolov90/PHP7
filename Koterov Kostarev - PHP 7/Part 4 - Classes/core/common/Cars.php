<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 15.11.2019
 * Time: 14:19
 */

namespace common;

define('VOLKSWAGEN', "Volkswagen");
define('VOLKSWAGEN_GOLF', "Golf");
define('VOLKSWAGEN_TIGUAN', "Tiguan");


class Car
{
    public function __construct($mark, $model, $number, $vin = "")
    {
        $this->_Mark = $mark;
        $this->_Model = $model;
        $this->_Number = $number;
        $this->_Vin = $vin;

        if( $vin === "" )
        {
            $this->_Vin = mt_rand(PHP_INT_MAX / 4, PHP_INT_MAX - 1);
        }

        self::$INSTANCES += 1;
    }

    public function __destruct()
    {
        --self::$INSTANCES;
    }

    public function __toString()
    {
        $s = "Car: {$this->_Mark} {$this->_Model} with number: {$this->_Number}";
        return $s;
    }

    public function __clone()
    {
        $new_vin = $this->_Vin;
        do
        {
            $new_vin = mt_rand(PHP_INT_MAX / 4, PHP_INT_MAX - 1);
        }
        while( $new_vin === $this->_Vin );

        $this->_Vin = $new_vin;
    }

    // --------------------------------------------------------------------------------
    // PROPERTIES:

    public function Instances()
    {
        return self::$INSTANCES;
    }

    public function GetInfo()
    {
        return ($this->__toString()." VIN[{$this->_Vin}]");
    }

    // --------------------------------------------------------------------------------
    // DATA:

    protected $_Vin;
    protected $_Mark;
    protected $_Model;
    protected $_Number;

    protected static $INSTANCES = 0;
}