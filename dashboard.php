<?php
 session_start();

 if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
 	 require('acoes/pdo.php');

     $adm = $_SESSION['usuario'][1];
     $nome = $_SESSION['usuario'][0];

 }
 else{
 	echo "<script>window.location = 'index.php'</script>";
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema login</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Deshboard - <?php echo $nome; ?></title>
</head>
<body>
	<header>
		<div id="content">
			<div id="user">
				<span><?php echo $adm ? $nome. "(ADM)" : $nome; ?></span>
			</div>
			<span class="logo">Sistema de Acesso</span>
			<div id="logout">
				<a href="acoes/logaut.php"><button>Sair</button></a>
			</div>
				
				 
		</div>
	</header>
	<div id="content">
	<?php if($adm): ?>
		<div id="tabelausuario">
			<span class="title">Lista de usuários</span>
		 <table>
			<thead>
				<tr>
					<td>Email</td>
					<td>Senha</td>
					<td>Nome</td>
					<td>Adm</td>
					<td>Id</td>
					<td>Ecluir</td>



				</tr>
			</thead>
			<tbody>
				<?php
				 $query = $pdo->prepare('SELECT * FROM usuarios');
	             $query->execute();

	             
	 	         $users = $query->fetchAll(PDO::FETCH_ASSOC);

	 	         for($i = 0; $i < sizeof($users); $i++):
	 	         	$usuarioAtual = $users[$i];

				?>
				 <tr>
				    <td><?php echo $usuarioAtual['email']; ?></td>
					<td><?php echo $usuarioAtual['senha']; ?></td>
					<td><?php echo $usuarioAtual['nome']; ?></td>
					<td><?php echo $usuarioAtual['adm']; ?></td>
					<td><?php echo $usuarioAtual['id']; ?></td>
					<td><button>Excluir</button></td>

				 </tr>
				<?php endfor; ?>
			  </tbody>
		</table>
	</div>
	 <?php endif; ?>
    </div>
	   
	
	

</body>
</html>