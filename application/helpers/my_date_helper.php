<?php
function today() {
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$time = getdate(date("U"));
	foreach($time as $key => &$value) {
		if ($value < 10) {
			$value = "0".$value;
		}
	}
	$time_now = floatval($time['year'].$time['mon'].$time['mday'].$time['hours'].$time['minutes'].$time['seconds']);
	return $time_now;
}
function this_time($time) {
	$time = array
	(
		'year' => substr($time, 0, 4),
		'month' => substr($time, 4, 2),
		'day' => substr($time, 6, 2),
		'hour' => substr($time, 8, 2),
		'minute' => substr($time, 10, 2),
		'second' => substr($time, 12, 2),
	);
	return $time;
}
?>