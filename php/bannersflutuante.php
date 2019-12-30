<?php
$loginssh = $_COOKIE['usuariogerado'];
$senhassh = $_COOKIE['senhagerado'];
$validade = $_COOKIE['validade'];
$limite = $_COOKIE['limite'];
$dias = $_COOKIE['dias'];
$sv = $_COOKIE['servidor'];
if ($loginssh != ""){echo '<ul id=menucontajagerada><li><a style="font-size: 18px;" onclick="mostrarconta()">VOCE JA TEM UMA CONTA GERADA </br> CLIQUE AQUI PARA VER­</a></li></ul>';}
if ($sv == "1") {	$ipfinal = $ip1; } if ($sv == "3") {	$ipfinal = $ip3; } ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script>
const clipboard = new ClipboardJS('.copiar')
clipboard.on('success', function(e) { alert("Copiado com sucesso") });
clipboard.on('error', function(e) { alert("Falha ao copiar") });
</script>
<div id="bannercontagerada">
  <div id="adonsitebf">
    <div id="whitebf-content">
	<div id="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-15 p-b-15">
				<div style="font-size: 18px; color: black; padding: 30px;">
          <div class="text-center"></b></b>
						<span class="txt1">IP: </span>
            <?php	echo '<b>'.$ipfinal.'</b>'; ?>
            <button title="Copiar ip" class="copiar" data-clipboard-text="<?php echo "$ipfinal"; ?>"><i class="far fa-copy"></i></button>
					</div>
          <div class="text-center">
            <span class="txt1">Login: </span>
            <b> <?php echo $loginssh; ?></b>
            <button title="Copiar usuario" class="copiar" data-clipboard-text="<?php echo $loginssh;?>"><i class="far fa-copy"></i></button>
          </div>
          <div class="text-center">
            <span class="txt1">Senha: </span>
            <b><?php echo $senhassh; ?></b>
            <button title="Copiar senha" class="copiar" data-clipboard-text="<?php echo $senhassh;?>"><i class="far fa-copy"></i></button>
          </div>
          <div class="text-center">
            <span class="txt1">Valido até: </span>
            <b title="Validade"><?php echo $validade;?></b>
          </div>
          <div class="text-center">
            <span class="txt1">Limite usuarios simultanios: </span><b><?php echo $limite; ?></b><p>
              <?php if ($sv == "1") {echo '<span style="font-size: 0.8em;">Dropbear: 80 &nbsp; &nbsp; SSL:443</span><p>'; } ?>
            <span style="font-size: 0.9em;" href="/"><b style="color: red;">Voce pode baixar arquivos pre configurados clicando <a href="/arquivos.php">AQUI</a></b> </span><br/>
            <a onclick="ocultatudo()" style="font-size: 0.8em;" >Para fechar clique fora do quadrado branco ou aqui.</a>
          </div>
			   </div>
		  	</div>
  	   <div onclick="ocultatudo()" id="overlaybf"></div>
     </div>
  	</div>
   </div>
  </div>
 </div>
