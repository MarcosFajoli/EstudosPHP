<?php
session_start();
echo $_SESSION['carro']."<br>".$_SESSION['cor']."<br>Id: ".session_id();