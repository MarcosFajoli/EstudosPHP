<?php 

	// funções para strings
	/*
		strtoupper
		strtolower
		substr
		str_pad
		str_repeat
		mb_strlen
		str_replace
		mb_strpos
	*/

	//strtoupper
	$nome = "marcos fajoli";
	$nome = strtoupper($nome);
	echo $nome."<br><hr>";


	//strtolower
	$nome = "MARCOS FAJOLI";
	$nome = strtolower($nome);
	echo $nome."<br><hr>";


	//substr
	$mensagem = "Olá mundo";
	echo substr($mensagem, 4, 6);
	echo "<br><hr>";


	//str_pad
	$objeto = "vaca";
	$nObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH); //STR_PAD_LEFT or STR_PAD_RIGHT
	echo $nObjeto."<br><hr>";


	//str_repeat
	$string = str_repeat("Sucesso! <br>", 3);
	echo $string;
	echo "<br><hr>";


	//mb_strlen
	$mensage = "Olá mundo";
	echo mb_strlen($mensage);
	echo "<br><hr>";


	//str_replace
	$texto = "A seleção Argentina será campeã. ";
	$nTexto = str_replace("Argentina", "Brasileira", $texto);
	echo $nTexto;
	echo "<br><hr>";


	//mb_strpos
	echo mb_strpos($texto, "será");

?>