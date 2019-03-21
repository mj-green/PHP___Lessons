<?php
	#subtr()
	#returns a portion of a string
	
	//$output = substr('Hello', 1, 3);
	//$output = substr('Hello', -2);
	//echo $output;

	#strlen()
	#returnes the length of a string

	//$output = strlen('Hello World');
	//echo $output;

	#strpos()
	#finds the position of the first occurence of a sub string

	//output = strpos('Hello World', 'o');
	//echo $output;

		#strpos()
	#finds the position of the first occurence of a sub string

	//$output = strrpos('Hello World', 'o');
	//echo $output;

	#trim()
	#strips whitespace

	/*
	$text = 'Hello World              ';
	//var_dump($text);

	$trimmed = trim($text);
	var_dump($trimmed);
	*/

	#strtoupper
	#makes everything uppercase

	//$output = strtoupper('Hello World');
	//echo $output;

	#strtolower
	#makes everything lowercase

	//$output = strtolower('Hello World');
	//echo $output;

	#ucwords()
	#capitalize every word

	//$output = ucwords('hello world');
	//echo $output;

	#srt_replace()
	#replace all occurences of a search string with a replacement

	//$text = 'Hello World';
	//$output = str_replace('World', 'Everyone', $text);
	//echo $output;

	#is_string()
	#check if string

	//$val = '22';
	//$output = is_string($val);
	
	//echo $output;

	/*
	$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

	foreach($values as $value){
		if(is_string($value)){
			echo "{$value} is a string<br>";
		}
	}
	*/

	#gzcompress()
	#compress a string

	$string =
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	$compressed = gzcompress($string);
	//echo $compressed;
	$original = gzuncompress($compressed);
	echo $original;