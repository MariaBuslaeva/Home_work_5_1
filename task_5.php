<?php
	function func ($n, $str1, $str2, $str3) {
		$a=$n%10;
		if ($a==1)
			return (string)$n . " " . $str1;
		if ($a==2 || $a==3 || $a==4)
			return (string)$n . " " . $str2;
		return (string)$n . " " . $str3;
	}
	echo func (7, "кот", "кота", "котов");
