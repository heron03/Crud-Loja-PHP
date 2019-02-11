<?php 
require_once("logica-usuario.php");
?>


<?php
if(usuarioEstaLogado()) {
	include("menu.php");
} else {
	include("menu-usuario.php");
}
?>




<?php include("rodape.php"); ?>