<!DOCTYPE html>
<? ob_start("ob_gzhandler"); ?>
<html lang="pt-BR">
	<head>
		<title>King BR</title>
		<meta charset="UTF-8">
		<meta name="author" content="HackkcaH">
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/allcssjs.php"); ?>
	</head>
	<body class="landing1" onload="desativado1()">
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/menu.php"); ?>
			<section id="main" class="wrapper">
			<div class="container">
				<header class="major">
					<body>
						</br>
						<style>
						table {
							font-family: arial, sans-serif;
							border-collapse: collapse;
							width: 100%;
							font-size: 19px;}
						td, th {
							border: 1px solid #dddddd;
							text-align: left;
							padding: 8px; }
						tr:nth-child(even) {
							background-color: #dddddd; }
						</style>
					<?php
						if ($_SESSION['loginsshgerado'] != ""){
							echo '<div class="alert alert-danger" role="alert"><b>Baixe o arquivo referente a sua operadora importe dentro do http injector e na hora de se conectar vai ser pedido a usuario e senha que voce acabou de criar.</b></div>';
							}else{
							echo '<div class="alert alert-danger" role="alert"><b>Para usar esses arquivos antes voce precisa gerar um usuario e senha <a href="/gerar.php" class="alert-link">AQUI­</a>.</br>Depois basta baixar um arquivo referente a sua operadora e importar dentro do http injector e conectar.</b></div>';}
							$sv = $_COOKIE['servidor'];
						if ($sv == ""){
							echo '<center><div style="color:white">SERVIDOR BRA</div></center>';
							require_once($_SERVER['DOCUMENT_ROOT']."/arquivos/bra.php");
							echo "</br>";
							echo '<center><div style="color:white">SERVIDOR BRA 2</div></center>';
							require_once($_SERVER['DOCUMENT_ROOT']."/arquivos/bra3.php");}
							if ($sv == "1"){
								echo '<center><div style="color:white">SERVIDOR BRA</div></center>';
								require_once($_SERVER['DOCUMENT_ROOT']."/arquivos/bra.php");}
							if ($sv == "3"){
								echo '<center><div style="color:white">SERVIDOR BRA 2</div></center>';
								require_once($_SERVER['DOCUMENT_ROOT']."/arquivos/bra3.php");} ?>
						</body>
					</header>
				</div>
			</br>
			</section>
			<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/footer.php"); require_once($_SERVER['DOCUMENT_ROOT']."/php/bannersflutuante.php"); ?>
	</body>
</html>
