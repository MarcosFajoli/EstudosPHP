<?php

	/* 
	 * is_array($array) = verifica se uma determinada variável é um array.
	 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
	 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
	 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
	 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
	 * array_pop($array) = exlui a ultima posição do array.
	 * array_shift($array) = exclui a primeira posição do array.
	 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
	 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
	 * array_combine($keys, $values) = mescla os dois arrays passados.
	 * array_sum() = calcula a soma dos elementos de array.
	 * explode("/", "20/01/2001") = transforma strings em array.
	 * implode("-", $array) = transforma array em string.
	 */

	$nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");

	//is_array
	if (is_array($nomes)) {
		echo "é um array";
	}else{
		echo "não é um array";
	}
	echo "<br><hr>";


	//in_array
	if(in_array("Rodrigo", $nomes)){
		echo "existe no array indicado";
	}else{
		echo "não existe no array indicado";
	}
	echo "<br><hr>";


	//array_keys
	$keys = array_keys($nomes);
	print_r($keys);
	echo "<br><hr>";


	//array_values
	$values = array_values($nomes);
	print_r($values);
	echo "<br><hr>";


	//array_merge
	$carros = array("Camaro", "Uno", "Gol");
	$motos = array("Pop100", "50cc", "CB1000");

	$veiculos = array_merge($carros, $motos);
	print_r($veiculos);
	echo "<br><hr>";


	//array_pop
	$comidas = array("Batata", "Sal", "Gengibre", "Costela");
	print_r($comidas);
	echo "<br>";

	echo array_pop($comidas);
	echo "<br>";
	print_r($comidas);
	echo "<br><hr>";


	//array_shift
	print_r($comidas);
	echo "<br>";

	echo array_shift($comidas);
	echo "<br>";
	print_r($comidas);
	echo "<br><hr>";


	//array_unshift
	$frutas = array("Uva", "Laranja", "Maçã");
	print_r($frutas);
	echo "<br>";

	array_unshift($frutas, "Manga", "Acerola", "Morango");
	print_r($frutas);
	echo "<br><hr>";


	//array_push
	$frutas2 = array("Uva", "Laranja", "Maçã");
	print_r($frutas2);
	echo "<br>";
	
	array_push($frutas2, "Manga", "Acerola", "Morango");
	print_r($frutas2);
	echo "<br><hr>";


	//array_combine
	$chaves = array("Campeão", "Vice", "Terceiro");
	$valores = array("Vasco", "Flamengo", "Botafogo");

	$times = array_combine($chaves, $valores);
	print_r($times);
	echo "<br><hr>";


	//array_sum
	$soma = array(5, 6, 10, 8);
	echo array_sum($soma);
	echo "<br><hr>";


	//explode
	$data = "21/12/2019";
	$novaData = explode('/', $data);
	print_r($novaData);
	echo "<br><br>";

	$frase = "Meu nome não é renato";
	$array = explode(' ', $frase);
	print_r($array);
	echo "<br><hr>";


	//implode
	$names = array("Marcos", "Carlos", "Gyarados", "Pikachu");
	$string = implode(", ", $names);
	echo $string;
	echo "<br><hr>";

?>