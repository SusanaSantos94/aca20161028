<?php

	function xpto(){
		echo "Hello World!";
	};
	
	$i = 10; 				/* int */
	echo $i.PHP_EOL;
	$i = 10.2;				/* float */
	echo $i.PHP_EOL;		/* PHP_EOL é uma constante simbolica */
	$i = "Susana";			/* string avaliativa */
	echo $i.PHP_EOL;
	$i = 'Susana';			/* string literal */
	echo $i.PHP_EOL;
	$i = true;				/* boolean (0 é interpretado como false; !=0 é true)*/
	echo $i.PHP_EOL;
	$i = xpto;				/* function */
	echo $i.PHP_EOL;
	$i = date("Y-m-d");		/* objecto instância de Date */
	echo $i.PHP_EOL;
	
	echo $I.PHP_EOL;		/* Sensibilidade ao tamanho da letra */
	
	xPTO(); 				/* Não há sensibilidade ao tamanho da letra para os nomes de funções */
?>