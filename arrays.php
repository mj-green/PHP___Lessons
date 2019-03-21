<?php
	#array- variable that holds multiple values
	/*
	-indexed
	-associative
	-multi-dimentional
	*/

	//Indexed arrays
	$people = array('Kevin', 'Jeremy', 'Sarah');
	$ids = array(23, 55, 12);
	$cars = ['honda', 'toyota', 'ford'];
	$cars[3] = 'chevy';
	$cars[] = 'BMW';

	//echo count($cars);
	//print_r($cars);
	//var_dump($cars);

	//echo $people[3];
	//echo $ids[2];
	//echo $cars[4];

	//associative arrays
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	
	//echo $people['Brad'];
	//echo $ids[22];
	$people['Jill'] = 42;
	//echo $people['Jill'];
	//print_r($people)
	//var_dump($people);

	//multi-dimentional
	$cars = array(
		array('honda', 20, 10),
		array('toyota', 30, 20),
		array('ford', 23, 12),
	);

	echo $cars[1][2];
?>