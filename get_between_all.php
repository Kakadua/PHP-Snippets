<?php
	function get_between_all($content, $start, $end){
		$pattern = "/{$start}(.*?){$end}/";
		preg_match_all($pattern, $content, $matches);
		return $matches[1];
	}
?>