<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 08.06.2021
 * Time: 13:48
 */

namespace core;

require_once "ApplicationBase.php";

use core\ApplicationBase;


class ApplicationChapter_31 extends ApplicationBase
{
    public static $ST_COUNTER = 0;

    public function __construct()
    {
        parent::__construct();

        $this->_header = "PHP Networking";
        $this->_theme = "Work with Network";
    }

    public function Exec()
    {
        self::UrlDecodeTest();
    }

    public function GetHeadersTest()
    {
        self::PrintHeader4("Print Headers Test");

        $headers = getallheaders();

        self::PrintArrayLn($headers);
    }

    public static function InstallCookie()
    {
        self::$ST_COUNTER = isset($_COOKIE['ST_COUNTER'])?($_COOKIE['ST_COUNTER']):(0);
        self::$ST_COUNTER += 1;

        setcookie("ST_COUNTER", self::$ST_COUNTER, mktime(0, 0, 0, 12, 1, 2030));
    }

    public function CookieTest()
    {
        self::PrintHeader4("Cookie Test");

        self::WriteLine("Счетчик посещения сайта: ".self::$ST_COUNTER);
    }

    public static function http_build_url($parsed)
    {
        if (!is_array($parsed)) return false;
        // Задан протокол?
        if (isset($parsed['scheme'])) {
            $sep = (strtolower($parsed['scheme']) == 'mailto' ? ':' : '://');
            $url = $parsed['scheme'] . $sep;
        } else {
            $url = '';
        }
        // Задан пароль или имя пользователя?
        if (isset($parsed['pass'])) {
            $url .= "$parsed[user]:$parsed[pass]@";
        } elseif (isset($parsed['user'])) {
            $url .= "$parsed[user]@";
        }
        // QUERY_STRING представлена в виде массива?
        if (@!is_scalar($parsed['query'])) {
            // Преобразуем в строку.
            $parsed['query'] = http_build_query($parsed['query']);
        }
        // Дальше составляем URL.
        if (isset($parsed['host']))     $url .= $parsed['host'];
        if (isset($parsed['port']))     $url .= ":".$parsed['port'];
        if (isset($parsed['path']))     $url .= $parsed['path'];
        if (isset($parsed['query']))    $url .= "?".$parsed['query'];
        if (isset($parsed['fragment'])) $url .= "#".$parsed['fragment'];
        return $url;
    }

    public function UrlDecodeTest()
    {
        self::PrintHeader4("URI Code|Encode test");

        $QUERY_STRING = 'param=Some_value&login=gotanothername&passwd=root&opts[switch_on]=checked&opts[disabled]=enabled';
        $out= [];

        parse_str($QUERY_STRING, $out);
        self::WriteData($out);

        $http_query='http://localhost:63342/Part%205%20-%20Standart%20Classes/index.php?_ijt=um7udbd1u1vj7orv36uf6rk0ce';
        $url = parse_url($http_query);
        self::WriteData($url);

        $query = [];
        parse_str( $url['query'],$query );
        $query['MY_PARAM'] = "MY_special_value_".date('H:i:s', mktime(23, 18, 10));
        $url['query'] = http_build_query($query);
        self::WriteLine("URL: ".self::http_build_url($url));
    }

}