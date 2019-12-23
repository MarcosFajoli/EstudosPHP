<html>
	<body>
		<?php 

			/*
				Sanitização
				Funções (filter_input - filter_var)
				FILTER_SANITIZE_SPECIAL_CHARS
				FILTER_SANITIZE_NUMBER_INT
				FILTER_SANITIZE_EMAIL
				FILTER_SANITIZE_URL
			*/

			if(isset($_POST['enviar-form'])){
				//Array de erros
				$erros = array();

                //Sanitizações
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

                $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
                if (!filter_var($idade, FILTER_VALIDATE_INT)) {
                    $erros[] = "Idade precisa ser um inteiro. ";
                }

                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $erros[] = "Email inválido. ";
                }

                $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
                if (!filter_var($url, FILTER_VALIDATE_URL)) {
                    $erros[] = "URL inválida. ";
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
			Nome  : <input type="text" name="nome"><br>
            Idade : <input type="text" name="idade"><br>
			Email : <input type="text" name="email"><br>
			URL   : <input type="text" name="url"><br>
			<button type="submit" name="enviar-form">Enviar</button><br>
		</form>
	
	</body>
</html>