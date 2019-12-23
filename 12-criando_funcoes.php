<?php

	function exibirNome($nome) {
		echo "Meu nome é $nome";
	}
	exibirNome("Marcos Fajoli");
	echo "<hr>";


	function calcularMedia($nome, $n1, $n2, $n3, $n4){
		$media = ($n1 + $n2 + $n3 + $n4) / 4;
		if ($media >= 7) {
			echo "$nome foi aprovado com a média $media. <br>";
		}else{
			echo "$nome foi reprovado <br>";
		}
	}

	calcularMedia("Marcos", 7, 7, 7, 10);
	calcularMedia("Felipe", 6, 5, 7, 4);


?>