<?php
	#function - block of code that can be repeatedly called

	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - My Function()
	*/

		//create simple funcion
		function simpleFunction(){
			echo 'Hello World';
		}

		//run simple function
		//simpleFunction();

		//function ith param
		function sayHello($name = 'World'){
			echo "hello $name<br>";
		}

		//sayHello('Joe');
		//sayHello('Bob');
		//sayHello('Tim');

		//return value
		function addNumbers($num1, $num2){
			return $num1 + $num2;
		}

		//echo addNumbers(2,3);

		//by reference

		$myNum = 10;

		function addFive($num){
			$num += 5;
		}

		function addTen(&$num){
			$num += 10;
		}

		addFive($myNum);

		echo "Value: $myNum<br>";

		addTen($myNum);

		echo "Value: $myNum<br>";
?>