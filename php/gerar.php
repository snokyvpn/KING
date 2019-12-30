<meta charset="UTF-8">
<title>Gerando Novo Login SSH Aguarde...</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/classe.ssh.php");
require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/ip.php");
require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/pass.php");

//ant sql injec
$_POST['loginssh'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['loginssh']);
$_POST['senhassh'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['senhassh']);
$_POST['sv'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['sv']);

// $_POST['dias'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['dias']);
// $_POST['limite'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['limite']);

$_POST['dias'] = "2";
$_POST['limite'] = "1";

$_POST['jagerado'] = preg_replace('/[^a-zA-Z0-9_@.]+/', '',$_POST['jagerado']);
//end

session_start();
$nomeescolhido = $_POST['loginssh'];
$loginssh = "$nomeescolhido";
$senhassh = $_POST['senhassh'];
$servidor = $_POST['sv'];
// $dias = $_POST['dias'];
// $limite = $_POST['limite'];
$dias = "2";
$limite = "1";
$validade = date("Y/m/d", strtotime("+$dias days"));
$jagerado = $_POST['jagerado'];

$loginantigo = $_COOKIE['usuariogerado'];
$servidorantigo = $_COOKIE['servidor'];

$datatual = date('Y-m-d H:i:s');
$validade = date("Y/m/d", strtotime("+$dias days"));
$validadef = date("d/m/Y", strtotime("+$dias days"));

$debug = "0";
?>

<script>
function usuariojaexiste() {alert("Este usuário já existe. Crie um usuário com outro nome"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?> }
function nomeusuarioinvalido() {alert("Você digitou um nome de usuário inválido! Use apenas letras, números, pontos e traços."); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function nomeususariocurto() {alert("Você digitou um nome de usuário muito curto use no mínimo 6 caracteres!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function nomeusuariolongo() {alert("Você digitou um nome de usuário muito grande use no máximo 32 caracteres!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function nomeusuarioembranco() {alert("Você digitou um nome de usuário vazio!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function senhavazia() {alert("Você digitou uma senha vazia!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function senhacurta() {alert("Você digitou uma senha muito curta! Para manter o usuário seguro use no mínimo 6 caracteres."); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function diasinvalido() {alert("Você digitou um número de dias inválido!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function diasvazio() {alert("Você deixou o número de dias para a conta expirar vazio!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function diascurto() {alert("Você deve digitar um número de dias maior que zero!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function numerosdeconexaologin() {alert("Você digitou um número de conexões inválido!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function numerodeconxaovazio() {alert("Você deixou o número de conexões simultâneas vazio!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function numeroconexaomaiorquezero() {alert("Você deve digitar um número de conexões simultâneas maior que zero!"); <?php if ($debug == "0") { echo 'window.location.replace("/gerar.php");'; } ?>}
function criadocomsucesso() {alert("Criado com sucesso!");<?php if ($debug == "0") { echo 'window.location.replace("/index.php?u=1");'; } ?>}
</script>

<?php
if ($jagerado == "on"){
if ($servidorantigo == 1) { $ipfinal = $ip1; $passf = $pass; }
if ($servidorantigo == 2) { $ipfinal = $ip2; $passf = $pass; }
$ip_servidorSSH = $ipfinal;
$loginSSH = "root";
$senhaSSH = $passf;
$ssh = new SSH2($ip_servidorSSH);
$ssh->auth($loginSSH,$senhaSSH);
$ssh->exec("./remover.sh ".$loginantigo."");
$ssh->output(); }


if ($servidor == 1) { $ipfinal = $ip1; $passf = $pass; }
if ($servidor == 2) { $ipfinal = $ip2; $passf = $pass; }

$ip_servidorSSH = $ipfinal;
$loginSSH = "root";
$senhaSSH = $pass;
$ssh = new SSH2($ip_servidorSSH);
$ssh->auth($loginSSH,$senhaSSH);
$ssh->exec("./criarusuario.sh ".$loginssh." ".$senhassh." ".$dias." ".$limite."");
$resultado = (string) $ssh->output();

if ($resultado == 0) {echo '<script language="javascript" type="text/javascript">usuariojaexiste();</script>'; }
if ($resultado == 1) {echo '<script language="javascript" type="text/javascript">nomeusuarioinvalido();</script>'; }
if ($resultado == 2) {echo '<script language="javascript" type="text/javascript">nomeususariocurto();</script>';}
if ($resultado == 3) {echo '<script language="javascript" type="text/javascript">nomeusuariolongo();</script>';}
if ($resultado == 4) {echo '<script language="javascript" type="text/javascript">nomeusuarioembranco();</script>';}
if ($resultado == 5) {echo '<script language="javascript" type="text/javascript">senhavazia();</script>';}
if ($resultado == 6) {echo '<script language="javascript" type="text/javascript">senhacurta();</script>';}
if ($resultado == 7) {echo '<script language="javascript" type="text/javascript">diasinvalido();</script>';}
if ($resultado == 8) {echo '<script language="javascript" type="text/javascript">diasvazio();</script>';}
if ($resultado == 9) {echo '<script language="javascript" type="text/javascript">diascurto();</script>';}
if ($resultado == 10) {echo '<script language="javascript" type="text/javascript">numerosdeconexaologin();</script>';}
if ($resultado == 11) {echo '<script language="javascript" type="text/javascript">numerodeconxaovazio();</script>';}
if ($resultado == 12) {echo '<script language="javascript" type="text/javascript">numeroconexaomaiorquezero();</script>';}
if ($resultado == 13) {
  setcookie("usuariogerado", $loginssh, time() + (3600*10*$dias), "/");
  setcookie("senhagerado", $senhassh, time() + (3600*10*$dias), "/");
  setcookie("servidor", $servidor, time() + (3600*10*$dias), "/");
  setcookie("dias", $dias, time() + (3600*10*$dias), "/");
  setcookie("limite", $limite, time() + (3600*10*$dias), "/");
  setcookie("validade", $validadef, time() + (3600*10*$dias), "/");
  echo '<script language="javascript" type="text/javascript">criadocomsucesso();</script>';}

if ($debug == "1") {
echo 'DEBUG ATIVO'; echo '</br></br>';
echo "user: $loginssh"; echo '</br>';
echo "senha: $senhassh"; echo '</br>';
echo "servidor: $ipfinal"; echo '</br>';
echo "dias: $dias"; echo '</br>';
echo "valido ate: $validade"; echo '</br>';
echo "resposta sv: $resultado"; echo '</br>';
echo "ja tinha conta: $jagerado"; echo '</br>'; } ?>
