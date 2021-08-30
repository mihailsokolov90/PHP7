<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 19.11.2019
 * Time: 16:20
 */

namespace core\chapter22;


class User
{
    public function __construct($name, $passwd)
    {
        $this->_Name = $name;
        $this->_Passwd = $passwd;
        $this->_Referer = $_SERVER['PHP_SELF'];
        $this->_Time = time();
    }

    public function __toString()
    {
        return "User -> Name: $this->_Name; -> Passwd: $this->_Passwd; -> Referer: $this->_Referer; -> Time: $this->_Time";
    }

    public function __sleep()
    {
        return ['_Name', '_Passwd', '_Referer', '_Time'];
    }

    public function __wakeup()
    {
        $this->_Time = time();
    }

    protected $_Name;
    protected $_Passwd;
    protected $_Referer;
    protected $_Time;
}