<?php

namespace Gajdaw\TddExamples\SimpleCalc\Tests;

use Gajdaw\TddExamples\SimpleCalc\SimpleCalc;

class SimpleCalcTest extends \PHPUnit_Framework_TestCase
{
   /**
     * @dataProvider getAddData
     *
     */
    public function testAdd($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::add($a, $b));
    }

    public function getAddData()
    {
        return array(
            array(1, 2, 3),
            array(2, 5, 7),
            array(2, 10, 12),
        );
    }

    public function testZero()
    {
        $this->assertEquals(0, SimpleCalc::zero());
    }

}
