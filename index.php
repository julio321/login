<?php
 session_start();

 if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
 	 require('acoes/pdo.php');
 	echo "<script>window.location = 'dashboard.php'</script>";

 }
 else{
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema login</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<script type="text/javascript" src="script/jquery.js"></script>
	<script type="text/javascript" src="script/acesso.js"></script>

</head>
<body>
	<header>Sistema de Acesso</header>

	<div id="mensagem"></div>

	<div id="formulario">

	    <form id="formularioLogin">

	  	 <span class="title">Acesse sua Conta</span>

          <div id="linha">
	  	    <label for="email">Email</label>
		    <input type="text" name="email" id="email" />
          </div>

         <div id="linha">
	  	   <label for="senha">Senha</label>
		   <input type="password" name="senha" id="senha" />
         </div>
         <div id="button">
		   <button id="btnEntrar">Entrar</button>
		 </div>
		
	   </form>
	   <form id="formularioCadastro">

	  	 <span class="title">Crie sua Conta</span>

	  	 <div id="linha">
	  	    <label for="nomeCadastro">Nome</label>
		    <input type="text" name="nomeCadastro" id="nomeCadastro" />
          </div>

          <div id="linha">
	  	    <label for="emailCadastro">Email</label>
		    <input type="text" name="emailCadastro" id="emailCadastro" />
          </div>

         <div id="linha">
	  	   <label for="senhaCadastro">Senha</label>
		   <input type="password" name="senhaCadastro" id="senhaCadastro" />
         </div>
         <div id="button">
		   <button id="btnCadastro">Cadastrar</button>
		 </div>
		
	   </form>
	     <div id="textoCadastro">
	  	  <span class="title">Não possui uma Conta?</span>
	  	  <span class="subtitle">Crie uma Conta agora</span>
	  	  <button id="btnCadastro">Cadastrar</button>
         </div>
         <div id="textoLogin">
	  	  <span class="title">Já possui uma Conta?</span>
	  	  <span class="subtitle">loren</span>
	  	  <button id="btnLogin">Entrar</button>
         </div>
	</div>    
    

</body>
</html>