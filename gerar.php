<!DOCTYPE html>
<? ob_start("ob_gzhandler"); ?>
<html lang="pt-BR">
	<head>
		<title>King BR</title>
		<meta charset="UTF-8">
		<meta name="author" content="HackkcaH">
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<?php
		require_once($_SERVER['DOCUMENT_ROOT']."/php/allcssjs.php");
		include($_SERVER['DOCUMENT_ROOT']."/php/pass.php");
		?>
	</head>
	<body class="landing1">
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/menu.php"); ?>
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major">
					</br>
  							<body class="fix-header fix-sidebar card-no-border">
										<div id="main-wrapper">
						            <div class=" " style="min-height: 0px;">
						            	<div class="0">
										 					<div class="0">
						                    	<div class="0">
						                        	<div id="fundocontainer">
						                            <div class="card-body">
						                                <form id="form" data-toggle="validator" autocomplete="off" action="/php/waitroom.php" method="POST" role="form">
																							<div class="form-body">
																								<h4 class="m-b-0 text-white"><i class="fas fa-user-plus"></i> Gerar login gratis</h4>
																									<div class="row p-t-30">
																											</div>
																									 </div></br></br>
						                                        <div class="row p-t-20">
						                                            <div style="color: white;" class="col-md-6">
						                                                <div class="form-group">
																															<small style="color: white;" class="form-control-feedback">Login SSH</small>
																																<input class="hidden" type="text" style="display: none!important; visibility: hidden!important;" ></input>
						                                                    <input onkeypress="return caracteres();" style="color: black; background-color: white;" type="text" name="loginssh" id="loginssh" autocomplete="off" class="form-control" minlength="4" placeholder="Digite o Login..." required=""></input>
						                                                    <small style="color: white;" class="form-control-feedback">(Apenas letras e numeros)</small> </div>
						                                            </br></div>
						                                            <div style="color: white;" class="col-md-6">
						                                                <div style="color: white;"class="form-group">
																															<small style="color: white;" class="form-control-feedback">Senha SSH</small>
																																<input class="hidden" type="text" style="display: none!important; visibility: hidden!important;" ></input>
						                                                    <input onkeypress="return caracteres();" style="color: black; background-color: white;" type="text" name="senhassh" id="senhassh" autocomplete="off" data-minlength="6" min="6" max="16" class="form-control" required="" placeholder="Digite a Senha..."></input>
																																<small style="color: white;" class="form-control-feedback"> (Minimo 4 caracteres e no maximo 16)</small>
						                                                </div></div>
						                                            <div class="col-md-8"></div>
						                                        </div>
						                                        <div class="row"><div class="col-md-6"><div class="form-group"></div></div></div>
																										<center>
																												<div class="col-md-4">
																													<label style="color: white;" class="control-label">Selecione o servidor*</label>
																													<select class="form-control custom-select" style="width: 100%;" name="sv" id="sv">
																														<option value="1" selected="selected">Servidor BRA <?php echo "(Usuarios online: $sv1)"; ?></option>
																														<option value="3">Servidor BRA 2<?php echo "(Usuarios online: $sv3)"; ?></option>
																													</select>
																											</div>
																									</center>
																									<input type="hidden" class="form-control" id="dias" name="dias" value="2">
																									<input type="hidden" class="form-control" id="limite" name="limite" value="1">
																									</br></br>
																									<script>
																									function pass() {document.getElementById("form").submit();}
																									</script>
																									<?php
																									$loginssh = $_COOKIE['usuariogerado'];
																									if ($loginssh != ""){
																							 echo '<div id="teste">
																									  <input type="checkbox" class="custom-control-input" name="jagerado" id="customControlInline">
																									  <label style="color: white;" class="custom-control-label" value="1" for="customControlInline">Eu entendo que ao criar uma conta nova minha antiga sera apagada.</label>
																										</div>
																										<script>
																										function verificarCheckBox() {
																										    var check = document.getElementsByName("jagerado");
																										    for (var i=0;i<check.length;i++){
																										        if (check[i].checked == true){
																										          pass();
																										        }  else {
																										          alert("Para gerar uma nova conta voce deve marcar a caixa de seleção.");
																														}}}
																										</script>';
																									}else{
																							echo '<input type="hidden" class="form-control" id="jagerado" name="jagerado" value="off">
																										<script>function verificarCheckBox() { pass(); }</script> ';
																									} ?>
						                                    <div class="form-actions">
																									<a style="color:white;" onclick="verificarCheckBox();" class="btn btn-primary"> <i class="fas fa-cogs"></i> Gerar login</a>&nbsp;
																									<button type="button" onclick="history.go(-1)" class="btn btn-danger"> <i class="fas fa-chevron-circle-left"></i> Voltar</button>
						                                    	</div>
						                               	</form>
						                           	</div>
 																			</div>
																	</div>
						                    </div>
						                 </div>
								        	</div>
						           </div>
										 </br></br>
						         </div>
				      		</body>
						</section>
					<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/footer.php"); require_once($_SERVER['DOCUMENT_ROOT']."/php/bannersflutuante.php"); require_once($_SERVER['DOCUMENT_ROOT']."/php/adsblock.php");  ?>
 </body>
</html>
