<?php
	//echo date('d');//day
	//echo date('m');//month
	//echo date('Y');//year
	//echo date('l');//day of the week
	
	//echo date('Y/m/d');
	//echo date('m-d-Y');

	//echo date('h'); //hour
	//echo date('i');//minute
	//echo date('s');//seconds
	//echo date('a');// AM or PM

	// set time zone
	date_default_timezone_get('England/Riding_Mill');

	//echo date('h:i:sa');

	$timestamp = mktime(10, 14, 54, 9, 10, 1981);

	//echo $timestamp;

	//echo date('m/d/Y h:i:sa', $timestamp);

	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow');	
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 months');

	//echo $timestamp2;

	echo date('m/d/Y h:i:sa', $timestamp5);
?>