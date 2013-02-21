<?php

namespace Gajdaw\TddExamples\SimpleCalc;

class SimpleCalc
{

    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    public static function divide($a, $b)
    {
        return $a / $b;
    }

    public static function zero()
    {
        return 0;
    }

}
