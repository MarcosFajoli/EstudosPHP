<?php
    session_start();
    $_SESSION['cor'] = "Verde";
    $_SESSION['carro'] = "Veloster";

    echo $_SESSION['carro']."<br>".$_SESSION['cor']."<br>Id: ".session_id();
?>