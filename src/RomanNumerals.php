<?php

class RomanNumerals
{
	/**
	 * @var array
	 */
	private $arabicRomanMap = array(
			1 => "I",
			4 => "IV",
			5 => "V",
			9 => "IX",
			10 => "X",
			40 => "XL",
			50 => "L",
			90 => "XC",
			100 => "C",
			400 => "CD",
			500 => "D",
			900 => "CM",
			1000 => "M"
		);

	/**
	 * @param int $number
	 * @return string
	 */
	public function arabicToRoman($number) {
		if(isset($this->arabicRomanMap[$number])) {
			return $this->arabicRomanMap[$number];
		}

		$reverseMap = array_reverse($this->arabicRomanMap, true);
		foreach ($reverseMap as $key => $value) {
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
		
		foreach (array_reverse($this->arabicRomanMap, true) as $key => $value) {
			if(substr($roman, 0, strlen($value)) == $value) {
				$newRoman = substr($roman, strlen($value));
				$arabicValue = $arabicValue + $key + $this->romanToArabic($newRoman);
				break;
			}
		}

		return $arabicValue;
	}
}