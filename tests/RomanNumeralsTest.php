<?php

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider romanNumeralsProvider
     */
	public function testRomanNumerals($arabic, $expected) {
		$romanNumerals = new RomanNumerals();
		$this->assertEquals($expected, $romanNumerals->arabicToRoman($arabic));
	}

    public function romanNumeralsProvider(){
        return array(
            array(1, "I"),
            array(3, "III"),
            array(13, "XIII"),
            array(19, "XIX"),
            array(3338, "MMMCCCXXXVIII"),
            array(1989, "MCMLXXXIX"),
            array(1995, "MCMXCV"),
            array(1025, "MXXV")
        );
    }
}
