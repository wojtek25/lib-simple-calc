<?php

namespace Gajdaw\TddExamples\SimpleCalc\Tests;

use Gajdaw\TddExamples\SimpleCalc\SimpleCalc;

class SimpleCalcTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $this->assertEquals(3, SimpleCalc::add(1, 2));
        $this->assertEquals(20.0, SimpleCalc::add(10.5, 9.5));
        $this->assertEquals(500.0, SimpleCalc::add(499.1, 0.9));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, SimpleCalc::subtract(7, 6));
        $this->assertEquals(-10, SimpleCalc::subtract(10, 20));
    }

    /**
     * @dataProvider getMultiplyData
     *
     */
    public function testMultiply($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::multiply($a, $b));
    }

    public function getMultiplyData()
    {
        return array(
            array(1, 2, 2),
            array(2, 5, 10),
            array(2, 10, 20),
            array(100, 0.01, 1),
        );
    }

    /**
     * @dataProvider getDivideData
     *
     */
    public function testDivide($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::divide($a, $b));
    }

    public function getDivideData()
    {
        return array(
            array(10, 2, 5),
            array(20, 5, 4),
            array(7, 2, 3.5),
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testDivideByZero()
    {
        SimpleCalc::divide(30, 0);
    }

    public function testZero()
    {
        $this->assertEquals(0, SimpleCalc::zero());
    }

    public function testOne()
    {
        $this->assertEquals(1, SimpleCalc::one());
    }

    /**
     * @dataProvider getIfMultiplyInversesDivideData
     *
     */
    public function testIfMultiplyInversesDivide($a, $b)
    {
        $this->assertEquals($a, SimpleCalc::multiply(SimpleCalc::divide($a, $b), $b));
        $this->assertEquals($a, SimpleCalc::divide(SimpleCalc::multiply($a, $b), $b), '', 0.001);
    }

    public function getIfMultiplyInversesDivideData()
    {
        return array(
            array(100, 2),
            array(97, 37),
            array(123456345789, 0.000000000037),
        );
    }

    /**
     * @dataProvider getOneDivXPlusOneData
     *
     */
    public function testOneDivXPlusOne($x, $result)
    {
        $this->assertEquals($result, SimpleCalc::oneDivXPlusOne($x), ', 0.00000001');
    }

    public function getOneDivXPlusOneData()
    {
        return array(
            array(1, 0.5),
            array(0, 1),
            array(10, 1/11),
        );
    }

    public function testSixtyNine()
    {
        $this->assertEquals(69, SimpleCalc::sixtynine());
    }

    public function testEleven()
    {
        $this->assertEquals(11, SimpleCalc::Eleven());

    }
	public function testOneDivX(){
		$this->assertEquals(0.5, SimpleCalc::oneDivX(2));
        $this->assertEquals(0.25, SimpleCalc::oneDivX(4));
        $this->assertEquals(0.1, SimpleCalc::oneDivX(10));
	}





}
