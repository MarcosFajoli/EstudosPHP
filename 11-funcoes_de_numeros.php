<?php

	//funções para números
	/*
		number_format
		round
		ceil
		floor
		rand
	*/

	//number_format
	$db = 1999.99;
	$preco = number_format($db, 2, ",", ".");
	echo "O valor do produto é R$ $preco";
	echo "<hr>";


	//round
	echo round(5.7);
	echo "<hr>";


	//ceil
	echo ceil(5.3);
	echo "<hr>";


	//floor
	echo floor(4.7);
	echo "<hr>";


	//rand
	echo rand(1, 10);

?>