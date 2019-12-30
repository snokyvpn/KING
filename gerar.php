<!DOCTYPE html>
<? ob_start("ob_gzhandler"); ?>
<html lang="pt-BR">
	<head>
		<title>King BR</title>
		<meta charset="UTF-8">
		<meta name="author" content="HackkcaH">
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/allcssjs.php");?>
	</head>
	<body class="landing1" onload="desativado1()">
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
																														<option value="1" selected="selected">Servidor BRA</option>
																													</select>
																											</div>
																									</center>
																									<input type="hidden" class="form-control" id="dias" name="dias" value="2">
																									<input type="hidden" class="form-control" id="limite" name="limite" value="1">
																									</br></br>
																									<script>
																									function pass() {document.getElementById("form").submit();}
																									</script>
						                                    <div class="form-actions">
																									<button type="button" onclick="tempdesativado()" class="btn btn-primary"> <i class="fas fa-cogs"></i> Desativado temporariamente</button>
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
