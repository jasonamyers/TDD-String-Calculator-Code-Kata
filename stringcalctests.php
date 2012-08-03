<?php

//String Calculator Code Kata Tests

require_once 'stringcalc.php';
require_once 'PHPUnit/Autoload.php';

class StringCalculatorTests extends PHPUnit_Framework_TestCase {

	protected $stringcalc;

	protected function setUp() {
		$this->stringcalc = new StringCalculator();
	}

	protected function tearDown() {
		unset($this->stringcalc);
	}

	function testAddEmptyString() {
		$expected = 0;
		$actual = $this->stringcalc->add("");
		$this->assertEquals($expected, $actual);
	}

	function testAddOneNumberStringOfOne() {
		$expected = 1;
		$actual = $this->stringcalc->add("1");
		$this->assertEquals($expected, $actual);
	}

	function testAddOneNumberStringOfTwo() {
		$expected = 2;
		$actual = $this->stringcalc->add("2");
		$this->assertEquals($expected, $actual);
	}

	function testAddTwoNumberStringofOneTwo() {
		$expected = 3;
		$actual = $this->stringcalc->add("1,2");
		$this->assertEquals($expected, $actual);
	}

	function testAddTwoNumberStringofTwoThree() {
		$expected = 5;
		$actual = $this->stringcalc->add("2,3");
		$this->assertEquals($expected, $actual);
	}

	function testAddThreeNumberStringofOneTwoThree() {
		$expected = 6;
		$actual = $this->stringcalc->add("1,2,3");
		$this->assertEquals($expected, $actual);
	}

	function testAddFourNumberStringofTenNineEightSeven() {
		$expected = 34;
		$actual = $this->stringcalc->add("10,9,8,7");
		$this->assertEquals($expected, $actual);
	}

	function testAddThreeNumberStringWithNewLineDelimiter() {
		$expected = 6;
		$actual = $this->stringcalc->add("1\n2,3");
		$this->assertEquals($expected, $actual);
	}
}

?>