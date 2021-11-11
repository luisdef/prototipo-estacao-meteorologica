<?php
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$resultado = $db->query('SELECT * FROM estacao');

	$linhas = $resultado->fetchAll(PDO::FETCH_ASSOC);

    $t = $linhas[count($linhas)-1];
?>