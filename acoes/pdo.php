<?php

try {
$pdo = new PDO("mysql:dbname=lo;host=127.0.0.1","root","root");
	
} catch (PDOException $e) {
	//echo"Erro com o Banco de Dados:".$e->getMessage();
	
}
 catch (Exception $e) {
	echo"Erro Generico:".$e->getMessage();
	
}
?>