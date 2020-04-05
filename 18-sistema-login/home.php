<?php
    // conexão
    require_once 'db_connect.php';

    // sessão
    session_start();

    // verificação
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }

    // dados
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($result);
    mysqli_close($connect);
?>

<html>
<head>
    <title>RESTRITO</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Olá <?php echo $dados['nome']; ?></h1>
    <a href="logout.php">Sair</a>
</body>
</html>