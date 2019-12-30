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
						<li><a href="#two" class="button special">Comprar login</a></li>
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
								</br>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<span style="font-size: 4em; color: blue;" class="fa-stack fa-1x">
								<span style="color: black;" class="fa-stack">
								<i class="fas fa-desktop"></i></span></span>
								<h3>Suporte</h3>
								<p>Suporte 24hrs para clientes.</p>
								</br>
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
				<div class="container">
				</br></br></br>
				<?php
				require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/classe.ssh.php");
				require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/ip.php");
				require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/pass.php");
				$ip_servidorSSH = $ip1;
				$loginSSH = "root";
				$senhaSSH = $pass;
				$ssh = new SSH2($ip_servidorSSH);
				$ssh->auth($loginSSH,$senhaSSH);
				$ssh->exec("./sshmonitorbot.sh 1");
				$sv1u = (string) $ssh->output();

				$ip_servidorSSH = $ip2;
				$loginSSH = "root";
				$senhaSSH = $pass;
				$ssh = new SSH2($ip_servidorSSH);
				$ssh->auth($loginSSH,$senhaSSH);
				$ssh->exec("./sshmonitorbot.sh 1");
				$sv2u = (string) $ssh->output();

				$sv1o = "0";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_TIMEOUT, 5); //timeout in seconds
				curl_setopt($ch, CURLOPT_URL, $ip1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD');
				curl_setopt($ch, CURLOPT_NOBODY, true);
				$result = curl_exec($ch); if (curl_errno($ch)){$sv1o = 'Offline';}else{$sv1o = 'Online';}
				curl_close($ch);

				$sv2o = "0";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_TIMEOUT, 5); //timeout in seconds
				curl_setopt($ch, CURLOPT_URL, $ip2);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD');
				curl_setopt($ch, CURLOPT_NOBODY, true);
				$result = curl_exec($ch); if (curl_errno($ch)){$sv2o = 'Offline';}else{$sv2o = 'Online';}
				curl_close($ch);
				?>
					<header class="major">
					<h2></h2>
					<b>Servidor: <img title="Brasil" src="/img/ban-bras.png"></img></b>
				  <p>Status: <?php echo $sv1o; ?></p>
				  <p>Usuarios online: <?php echo $sv1u; ?></p>
				  </br></br>

				  <b>Servidor: <img title="França" src="/img/ban-fran.png"></img></b>
				  <p>Status: <?php echo $sv2o; ?></p>
				  <p>Usuarios online: <?php echo $sv2u; ?></p>				</br></br>
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
