<?php

	//Constantes
	define("NOME", "Marcos Fajoli");
	define("IDADE", 15);
	define("ALTURA", 1.71);
	define("CASADO", false);
	
	define("TIMES", ['Flamengo', 'Corinthians', 'Palmeiras']);

	echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA;
	echo "<hr>";

	var_dump(TIMES);


	//CONSTANTES SÃO AUTOMATICAMENTE GLOBAIS


	function exibeNome(){
		echo NOME;
	}
	exibeNome();
?>