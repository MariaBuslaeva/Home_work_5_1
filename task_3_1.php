<?php
 	$str=$argv[1]; 
 	$index=strlen($str)-1;
 	$str[$index]=strtoupper($str [$index]);
 	echo $str;