<?php 

	//superglobais
	/*
		$GLOBALS *** https://www.php.net/manual/pt_BR/reserved.variables.globals.php
		$_SERVER *** https://www.php.net/manual/pt_BR/reserved.variables.server.php
		$_REQUEST ** https://www.php.net/manual/pt_BR/reserved.variables.request.php
	    $_POST ***** https://www.php.net/manual/pt_BR/reserved.variables.post.php
	    $_GET ****** https://www.php.net/manual/pt_BR/reserved.variables.get.php
	    $_FILES **** https://www.php.net/manual/pt_BR/reserved.variables.files.php
	    $_ENV ****** https://www.php.net/manual/pt_BR/reserved.variables.environment.php
	    $_COOKIE *** https://www.php.net/manual/pt_BR/reserved.variables.cookies.php
	    $_SESSION ** https://www.php.net/manual/pt_BR/reserved.variables.session.php
	*/

	//$GLOBALS
	$x = 10;
	$y = 15;

	function soma(){
		echo $GLOBALS['x'] + $GLOBALS['y'];
	}
	soma();
	echo "<hr>";


	//$_SERVER
	echo $_SERVER['PHP_SELF']."<br>";
	echo $_SERVER['SERVER_NAME']."<br>";
	echo $_SERVER['SCRIPT_FILENAME']."<br>";
	echo $_SERVER['DOCUMENT_ROOT']."<br>";
	echo $_SERVER['SERVER_PORT']."<br>";
	echo $_SERVER['REMOTE_ADDR']."<br><hr>";

?>