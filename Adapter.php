<?php

/**
 * Внешняя библиотека вычисления площади Квадрата
 */

class SquareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        $area = ($diagonal ** 2) / 2;
        return $area;
    }
}

/**
 * Интерфейс (клиент) для вычисления площади Квадрата
 */

interface ISquare
{
    function squareArea(float $sideSquare);
}

/**
 * Адаптер
 */

class SquareAreaLibAdapter implements ISquare
{
    private $SquareAreaLib;

    public function __construct(SquareAreaLib $SquareAreaLib)
    {
        $this->SquareAreaLib = $SquareAreaLib;
    }

    public function squareArea(float $sideSquare)
    {
        $diagonal = $sideSquare * sqrt(2);
        return $this->SquareAreaLib->getSquareArea($diagonal);
    }
}

echo (new SquareAreaLibAdapter(new SquareAreaLib()))->squareArea(4) . PHP_EOL;
