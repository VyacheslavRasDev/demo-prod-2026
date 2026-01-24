<?php
namespace Core;
class Validator
{
	public static function string($value, $min = 1, $max = 255) {

		$value = trim($value);
		$string = mb_strlen($value, 'UTF-8');

		return $string >= $min && $string <= $max;
	}

	public static function email($value)
	{
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}

}