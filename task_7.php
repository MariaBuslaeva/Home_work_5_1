<?php
	$now = time(); 
	$your_date = strtotime("2020-1-1");
	$datediff = $now - $your_date; 
	echo floor($datediff / (60 * 60 * 24)*-1);
