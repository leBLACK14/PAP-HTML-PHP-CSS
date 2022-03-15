<?php

	//LOGOUT
	session_start();
	include 'cabecalho.php';

	$mensagem = "Página não disponivel a visitantes.";
	if(isset($_SESSION['user'])) $mensagem = 'Até à próxima, '.$_SESSION['user'].'!';

	//faz o logout do utilizador
	unset($_SESSION['user']);

	//apresenta a caixa com a mensagem
	echo '<div class="login_sucesso">'.$mensagem.'<br><br>
			<a href="index.php">Inicio</a>
		</div>';

	include 'rodape.php';
?>