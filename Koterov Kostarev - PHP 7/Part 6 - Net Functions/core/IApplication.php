<?php


namespace core;


interface IApplication
{
    public static function Title();

    public function exec();

    public static function WriteHeader(string $str, int $level = 4);

    public static function WriteLine(string $str);

    public static function WritePreData(string $str): void;

    public static function WriteArray(array $arr): void;
}