<?php

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var RomanNumerals
	 */
	private $romanNumerals;

	public function setUp() {
		$this->romanNumerals = new RomanNumerals();
	}

    /**
     * @dataProvider romanNumeralsProvider
     */
	public function testArabicToRoman($arabic, $roman) {
		$this->assertEquals($roman, $this->romanNumerals->arabicToRoman($arabic));
	}

	/**
	 * @dataProvider romanNumeralsProvider
	 */
	public function testRomanToArabic($arabic, $roman) {
		$this->assertEquals($arabic, $this->romanNumerals->romanToArabic($roman));
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
