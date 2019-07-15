<?php
 	/*$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //Задание 1
 	shuffle($array);
 	echo print_r($array);*/ 
 	
 	/*function factorial($n) { //Задание 2
 		if ($n==0) return 1;
 		else return $n*factorial($n-1);	
 	}
 	echo factorial($argv[1]);*/	

 	/*$str=$argv[1]; //Задание 3 (первый вариант)
 	$index=strlen($str)-1;
 	$str[$index]=strtoupper($str [$index]);
 	echo $str;*/

 	/*$str=$argv[1]; //Задание 3 (второй вариант)
 	$str=strrev($str);
 	$str=strrev(ucfirst($str));
 	echo $str;*/

 	/*$str=$argv[1]; //Задание 4
 	function rus2translit($str) {
	    $converter = array(
	        'а' => 'a',   'б' => 'b',   'в' => 'v',
	        'г' => 'g',   'д' => 'd',   'е' => 'e',
	        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
	        'и' => 'i',   'й' => 'y',   'к' => 'k',
	        'л' => 'l',   'м' => 'm',   'н' => 'n',
	        'о' => 'o',   'п' => 'p',   'р' => 'r',
	        'с' => 's',   'т' => 't',   'у' => 'u',
	        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
	        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
	        'ь' => '',  	'ы' => 'y',   '	ъ' => '',
	        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
	        
	        'А' => 'A',   'Б' => 'B',   'В' => 'V',
	        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
	        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	        'О' => 'O',   'П' => 'P',   'Р' => 'R',
	        'С' => 'S',   'Т' => 'T',   'У' => 'U',
	        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
	        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
	        'Ь' => '',  'Ы' => 'Y',   'Ъ' => '',
	        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    	);
    	return strtr($str, $converter);
	}
	echo $str=rus2translit($str);*/

	/*function func ($n, $str1, $str2, $str3) { //Задание 5
		$a=$n%10;
		if ($a==1)
			return (string)$n . " " . $str1;
		if ($a==2 || $a==3 || $a==4)
			return (string)$n . " " . $str2;
		return (string)$n . " " . $str3;
	}
	echo func (7, "кот", "кота", "котов");*/


	/*$count=0;  //Задание 6 
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
	}*/

	/*$now = time(); 
	$your_date = strtotime("2019-12-31"); //Задание 7
	$datediff = $now - $your_date; 
	echo floor($datediff / (60 * 60 * 24));*/