<?php

namespace core;

interface IApplicationCore
{
    public static function Title(): string;

    public static function Module(): string;

    public static function writeHeader(string $str, int $lvl = 5): void;

    public static function writeLine(string $str): void;

    public static function writeArray(array $arr): void;

    public static function writeData(mixed $obj): void;
}