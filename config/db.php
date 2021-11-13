<?php
    $user_db = getenv("REMOTE_MYSQL_USER");
	$passwd_db = getenv("REMOTE_MYSQL_PASSWD");
	$host = "mysql:host=remotemysql.com:3306;dbname=$user_db;charset=utf8";
    $db = new PDO($host, $user_db, $passwd_db);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$resultado = $db->query('SELECT * FROM estacao');

	$linhas = $resultado->fetchAll(PDO::FETCH_ASSOC);

    $t = $linhas[count($linhas)-1];
?>