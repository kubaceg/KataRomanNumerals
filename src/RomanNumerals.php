<?php

class RomanNumerals
{
	/**
	 * @var array
	 */
	private $arabicRomanMap = array(
			1000 => "M",
			900 => "CM",
			500 => "D",
			400 => "CD",
			100 => "C",
			90 => "XC",
			50 => "L",
			40 => "XL",
			10 => "X",
			9 => "IX",
			5 => "V",
			4 => "IV",
			1 => "I"
		);

	/**
	 * @param int $number
	 * @return string
	 */
	public function arabicToRoman($number) {
		if(isset($this->arabicRomanMap[$number])) {
			return $this->arabicRomanMap[$number];
		}

		foreach ($this->arabicRomanMap as $key => $value) {
			$res = $number / $key;
			if($res > 1) {
				return $this->arabicRomanMap[$key] . $this->arabicToRoman($number - $key);
			}
		}
	}

	/**
	 * @param string $roman
	 * @return int
	 */
	public function romanToArabic($roman) {
		$arabicValue = 0;
		
		foreach ($this->arabicRomanMap as $key => $value) {
			if(substr($roman, 0, strlen($value)) == $value) {
				$newRoman = substr($roman, strlen($value));
				$arabicValue = $arabicValue + $key + $this->romanToArabic($newRoman);
				break;
			}
		}

		return $arabicValue;
	}
}