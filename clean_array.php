<?php	
	/**
	 * Cleans an array from crap that you specify. It does this by using str_replace
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param array $array The array you want to clean out bad stuff from
	 * @param String $before The stuff you want to remove, see PHPs str_replace for advanced use
	 * @param String $after The stuff you want instead, see PHPs str_replace for advanced use
	 *
	 * @return array A neat and clean array
	 *
	 *	@version 1
	 */
	function clean_array($array, $before, $after){
		$i = 0;
		foreach($array as $item){
			$array[$i] = str_replace($before, $after, $item);
			$i++;
		}
		return $array;
	}
?>