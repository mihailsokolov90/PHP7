<?php

namespace core;

interface IApplicationCore
{
    public function Title(): string;

    public function Exec(): void;

    /**
     * @param string $hr
     * @param int $level
     * @return void
     */
    public static function WriteHeader(string $hr, int $level = 4): void;

    /**
     * @param string $str
     * @param bool $indent
     * @return void
     */
    public static function WriteLine(string $str, bool $indent = false): void;

    /**
     * @param array $arr
     * @return void
     */
    public static function WriteArray(array $arr): void;

    /**
     * @param mixed $data
     * @return void
     */
    public static function WriteData(mixed $data): void;
}