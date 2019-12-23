<?php

	//arrays numéricos
	echo "<h1>ARRAYS NUMÉRICOS</h1><br>";

		$carros = array("BMW","Veloster","Hilux");
		$carros[] = "Amarok";
		$carros[10] = "Camaro";
		print_r($carros);
		echo "<br>";
		echo $carros[0];
		echo "<br>";


		$motos = array();
		$motos[] = "Yamaha";
		$motos[] = "Honda";
		$motos[5] = "Suzuki";
		echo $motos[5];
		echo "<br>";


		$clientes = ["Marcos", "Cauê", "Natalia"];
		print_r($clientes);
		echo "<hr>";


		//count
		echo count($motos);
		echo "<br>";

		$totalMotos = count($motos);
		echo $totalMotos;
		echo "<hr>";


		//foreach
		foreach ($carros as $valor) {
			echo $valor."<br>";
		}
		echo "<hr>";

		foreach ($motos as $valor) {
			echo $valor."<br>";
		}
		echo "<hr>";

		foreach ($clientes as $valor) {
			echo $valor."<br>";
		}
		echo "<hr>";



	//arrays associativos
	echo "<h1>ARRAYS ASSOCIATIVOS</h1><br>";

		$pessoa = array("nome" => "Marcos", "idade" => 15, "altura" => 1.71);

		$pessoa["estado"] = "São Paulo";
		print_r($pessoa);
		echo "<br>";

		echo $pessoa["nome"]."<br>";
		echo $pessoa["idade"]."<br>";
		echo $pessoa["altura"]."<br>";
		echo $pessoa["estado"]."<br>";

		var_dump($pessoa);
		echo "<hr>";

		foreach ($pessoa as $indice => $valor) {
			echo $indice." : ".$valor."<br>";
		}
		echo "<hr>";



	//arrays multidimensionais
	echo "<h1>ARRAYS MULTIDIMENSIONAIS</h1><br>";

		$times = array( 
				"Cariocas" => array( "Vasco", "Flamengo", "Botafogo" ),
				"Paulistas" => array( "Santos", "Corinthians", "Palmeiras" ), 
				"Baianos" => array( "Bahia", "Vitória", "Itabuna" ) 
				);
		echo $times["Cariocas"][0]."<br>";
		echo $times["Paulistas"][1]."<br><hr>";

		foreach ($times["Cariocas"] as $indice => $valor) {
			echo $indice." : ".$valor."<br>";
		}
		echo "<hr>";

		foreach ($times["Paulistas"] as $indice => $valor) {
			echo $indice." : ".$valor."<br>";
		}
		echo "<hr>";

		foreach ($times["Baianos"] as $indice => $valor) {
			echo $indice." : ".$valor."<br>";
		}
		echo "<hr>";

?>