<?php
	/**
	 * Creates a string with the time since given timestamp in rtext form. Ex, 4 days
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param integer $time Timestamp of the time you want to count from
	 *
	 * @return String Time since given timestamp
	 *
	 *	@version 1
	 */
	function time_since($time){
		$time = time() - $time;
		if($time < 1){ $time = 1; }
		$units = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'min',
			1 => 'second'
		);
		foreach($units as $sec => $text) {
			if($time < $sec){ continue; }
			$numUnits = floor($time / $sec);
			if($numUnits > 1){ $text .=  's'; }
			return $numUnits.' '.$text;
		}
	}
?>