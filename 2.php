<?php
	$a = "Eu vi um sapo";
	$b = "Valor de b: $a, um gordo sapo".PHP_EOL;
	$c = 'Valor de c: $a, um gordo sapo'.PHP_EOL;
	
	echo $b;
	echo $c;
	
	$joaquina = "anda de saias".PHP_EOL;
	
	function xpto2(){
		global $joaquina;
		echo $joaquina;
	}
	
	function xpto3(){
		echo $GLOBALS['joaquina'];
	}
	
	xpto2();
	xpto3();
?>	