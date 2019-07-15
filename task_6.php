<?php
	$count=0; 
	for ($i=0; $i<=999999; $i++) {
		switch ($i) {
			case $i<10:
				$count=5;
				break;
			case $i<100:
				$count=4;
				break;
			case $i<1000:
				$count=3;
				break;
			case $i<10000:
				$count=2;
				break;
			case $i<100000:
				$count=1;
				break;
			case $i<1000000:
				$count=0;
				break;
		}
		$str=str_pad((string)$i, $count, "0", STR_PAD_LEFT);
		if ($str[0]+$str[1]+$str[2]==$str[3]+$str[4]+$str[5]) {
			echo $str ."\n";
		}
	}
