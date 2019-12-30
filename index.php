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
	<body class="landing1">
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/menu.php"); ?>
			<section id="banner">
			</br></br></br>
				<h2>King BR</h2>
				<p>Voce pode gerar um login SSH gratis clicando abaixo</p>
				<ul class="actions">
					<li>
						<li><a href="/gerar.php" class="button special">Gerar login gratis</a></li>
						<li><a target="_blank" href="https://t.me/grupokingbr" class="button special">Comprar login</a></li>
					</li>
				</ul>
			</section>
	<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
					</br></br></br>
						<h2>Sobre nossos servidores.</h2>
						<p>Temos servidores gratis liberado para uso e servidores pagos</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<span style="font-size: 4em; color: blue;" class="fa-stack fa-1x">
								<span style="color: black;" class="fa-stack">
								<i class="fas fa-cloud"></i></span></span>
								<h3>Servidores disponiveis:</h3>
								<p>Azure</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<span style="font-size: 4em; color: blue;" class="fa-stack fa-1x">
								<span style="color: black;" class="fa-stack">
								<i class="fas fa-desktop"></i></span></span>
								<h3>Suporte</h3>
								<p>Suporte 24hrs para clientes.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<span style="font-size: 4em; color: blue;" class="fa-stack fa-1x">
								<span style="color: black;" class="fa-stack">
								<i class="fas fa-rocket"></i></span></span>
								<h3>Velocidade de link:</h3>
								<p>Servidores com link de 1/GBS contratados.</p>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section id="three" class="wrapper style3 special">
				<style>
				img{
					width: 20px;
					height: 20px;
				}
				.statussv{
					font-size: 20px;
				}
				.container b{
					font-size: 25px;
				}
				</style>
				<div class="container">
					<header class="major">
					<h2></h2>
					<b>Servidor: <img title="Brasil" src="/images/ban/ban-bras.png"></img></b></br>
					<div class="statussv">
					Status: </br>
				  Usuarios online:
					</div>
				  </br></br></br></br>

				  <b>Servidor: <img title="França" src="/images/ban/ban-fran.png"></img></b></br>
					<div class="statussv">
					Status: </br>
				  Usuarios online:
					</br></br></br></br>
					</div>
					  	<section id="back">
					    	<ul class="actions">
					       	<li>
					        	<li><a href="#banner" class="button special">Voltar ao topo</a></li>
					      	</li>
				    		</ul>
				  		</section>
						</br>
					</header>
				</div>
			</section>
			<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/footer.php"); require_once($_SERVER['DOCUMENT_ROOT']."/php/bannersflutuante.php");?>
		</body>
</html>
