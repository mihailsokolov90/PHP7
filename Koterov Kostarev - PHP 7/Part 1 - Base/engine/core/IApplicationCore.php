<?php

namespace core;

interface IApplicationCore
{
    public function Exec(): void;

    public function Title(): string;

    public static function WriteLine(string $str);

    public static function WriteHeader(string $hr, int $level = 5);

    public static function WriteArray(array $arr);

    public static function WriteData(mixed $data);
}