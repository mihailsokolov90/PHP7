<?php

namespace core;


interface IApplicationBase
{
    public function getID(): string;

    public function WriteLine(string $str): void;

    public function WriteData(string $data): void;

    public function WriteArray(array $arr): void;
}