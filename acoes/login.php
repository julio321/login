<?php
require('pdo.php');

if(isset($_POST['email']) && isset($_POST['senha']) && $pdo != null){
	$query = $pdo->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
	$query->execute(array($_POST['email'], $_POST['senha']));

	if($query->rowCount()){
		$user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

		session_start();
		$_SESSION['usuario'] = array($user['nome'], $user['adm']);

		echo json_encode(array('erro' => 0));
	}else{
		echo json_encode(array('erro' => 1, 'mensagem' => 'Email e/ou senha incorretos.'));

	}
}else{
		echo json_encode(array('erro' => 1, 'mensagem' => 'Ocorreu um erro interno no servidor.'));

}
?>