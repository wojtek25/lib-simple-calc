<?php

/*
 * This file is part of the TDD PHP project:
 *
 *     https://github.com/tdd-php
 *
 * (c)2013 Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Gajdaw\TddExamples\SimpleCalc;

/**
 *
 * SimpleCalc performs math operations:
 *     -addition
 *     -subtraction
 *     -multiplication
 *     -division
 *     -zero
 *
 * @author Włodzimierz Gajda <gajdaw@gajdaw.pl>
 */
class SimpleCalc
{

    /**
     * Addition
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Subtraction
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Multiplication
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Division
     *
     * @param $a
     * @param $b
     * @return float
     */
    public static function divide($a, $b)
    {
        return $a / $b;
    }

    /**
     * Zero
     *
     * @return int
     */
    public static function zero()
    {
        return 0;
    }

}
