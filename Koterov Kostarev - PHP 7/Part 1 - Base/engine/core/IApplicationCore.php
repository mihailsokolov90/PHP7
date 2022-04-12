<?php

namespace core;


interface IApplicationCore
{
    # Текущий загловок страницы
    public static function Title(): string;

    # Выполнение сценария
    public function Exec();
}