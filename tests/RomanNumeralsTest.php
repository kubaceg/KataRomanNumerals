<?php

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
	public function testRomanNumerals() {
		$romanNumerals = new RomanNumerals();
		$this->assertEquals("I", $romanNumerals->arabicToRoman(1));
		$this->assertEquals("II", $romanNumerals->arabicToRoman(2));
		$this->assertEquals("III", $romanNumerals->arabicToRoman(3));
		$this->assertEquals("IV", $romanNumerals->arabicToRoman(4));
		$this->assertEquals("V", $romanNumerals->arabicToRoman(5));
		$this->assertEquals("VI", $romanNumerals->arabicToRoman(6));
		$this->assertEquals("XIII", $romanNumerals->arabicToRoman(13));
		$this->assertEquals("XVIII", $romanNumerals->arabicToRoman(18));
		$this->assertEquals("XIX", $romanNumerals->arabicToRoman(19));
		$this->assertEquals("MXXV", $romanNumerals->arabicToRoman(1025));
		$this->assertEquals("MCMXCV", $romanNumerals->arabicToRoman(1995));
		$this->assertEquals("MM", $romanNumerals->arabicToRoman(2000));
		$this->assertEquals("MMMCCCXXXVIII", $romanNumerals->arabicToRoman(3338));
		$this->assertEquals("MMXI", $romanNumerals->arabicToRoman(2011));
		$this->assertEquals("MMXVI", $romanNumerals->arabicToRoman(2016));	
		$this->assertEquals("MLXVI", $romanNumerals->arabicToRoman(1066));
		$this->assertEquals("MCMLXXXIX", $romanNumerals->arabicToRoman(1989));		
	}
}