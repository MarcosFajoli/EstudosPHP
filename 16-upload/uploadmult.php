<html>
    <body>
        <?php

            if (isset($_POST['enviar-form'])) {
                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                $qtdeArquivos = count($_FILES['arquivos']['name']);
                $cont = 0;

                while ($cont < $qtdeArquivos){
                    $extensao = pathinfo($_FILES['arquivos']['name'][$cont], PATHINFO_EXTENSION);
                    $nome_inicial = strval($_FILES['arquivos']['name'][$cont]);

                    if (in_array($extensao, $formatosPermitidos)) {
                        $pasta = "arquivos1/";
                        $temporario = $_FILES['arquivos']['tmp_name'][$cont];
                        $novoNome = uniqid().".$extensao";

                        if ( move_uploaded_file($temporario, $pasta.$novoNome) ) {
                            echo "Upload do arquivo $nome_inicial feito com sucesso para $pasta$novoNome<br><br>";
                        }else {
                            echo "Erro, não foi possível fazer o upload.<br><br>";
                        }
                    }else {
                        echo "$extensao não é permitida.<br><br>";
                    }
                    $cont++;
                }
            }
                

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivos[]" multiple><br>
            <input type="submit" name="enviar-form">
        </form>
    </body>
</html>