<?php  

	//*******Escalares********
	//string
	$nome = "Marcos";
	var_dump($nome);
	if (is_string($nome)) {
	 	echo "<br>É uma string";
	}else{
		echo "<br>Não é uma string";
	}
	echo "<hr>";

	//int
	$idade = 15;
	var_dump($idade);
	if (is_int($idade)) {
	 	echo "<br>É um inteiro";
	}else{
		echo "<br>Não é um inteiro";
	}
	echo "<hr>";

	//float
	$altura = 1.71;
	var_dump($altura);
	if (is_float($altura)) {
	 	echo "<br>É um float";
	}else{
		echo "<br>Não é um float";
	}
	echo "<hr>";

	//boolean
	$admin = true;
	var_dump($admin);
	if (is_bool($admin)) {
	 	echo "<br>É um booleano";
	}else{
		echo "<br>Não é um booleano";
	}
	echo "<hr>";


	//*******Compostos********
	//array
	$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
	var_dump($carros);
	if (is_array($carros)) {
	 	echo "<br>É um array";
	}else{
		echo "<br>Não é um array";
	}
	echo "<hr>";

	//object
	class Cliente {

		public $nome;
		public function atribuirNome($nome) {
			$this->$nome = $nome;
		}

	}

	$cliente = new Cliente();
	$cliente->atribuirNome("Marcão");
	var_dump($cliente);
	if (is_object($cliente)) {
	 	echo "<br>É um objeto";
	}else{
		echo "<br>Não é um objeto";
	}
	echo "<hr>";


	//*******Especiais********
	//NULL
	$cidade = NULL;
	var_dump($cidade);
	if (is_null($cidade)) {
	 	echo "<br>É nulo";
	}else{
		echo "<br>Não é nulo";
	}
	echo "<hr>";

	//resource
?>