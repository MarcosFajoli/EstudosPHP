<html>
	<body>
		<?php 

			/*
				Validações
				Funções (filter_input - filter_var)
				FILTER_VALIDATE_INT
				FILTER_VALIDATE_EMAIL
				FILTER_VALIDATE_FLOAT
				FILTER_VALIDADE_IP
				FILTER_VALIDATE_URL
			*/

			if(isset($_POST['enviar-form'])){
				//Array de erros
				$erros = array();

				//Validações
				if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
					$erros[] = "Idade precisa ser um inteiro. ";
				}

				if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
					$erros[] = "Email inválido. ";
				}

				if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
					$erros[] = "Peso precisa ser um real. ";
				}

				if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
					$erros[] = "IP inválido. ";
				}

				if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
					$erros[] = "URL inválido. ";
				}
				
				//Exibindo mensagens
				if (!empty($erros)) {
					echo "<ul>";
					foreach ($erros as $erro) {
						echo "<li> $erro </li>";
					}
					echo "</ul>";
				}else {
					echo "Parabéns, seus dados estão corretos. ";
				}
			}

		?>
		
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			Idade : <input type="text" name="idade"><br>
			Email : <input type="text" name="email"><br>
			Peso  : <input type="text" name="peso"><br>
			IP    : <input type="text" name="ip"><br>
			URL   : <input type="text" name="url"><br>
			<button type="submit" name="enviar-form">Enviar</button><br>
		</form>
	
	</body>
</html>