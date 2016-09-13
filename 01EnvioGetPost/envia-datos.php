<?php  
//variables global get $_GET y $_POST
//función isset evalua si existe esa variable

if (isset($_GET["enviar_btn"])) {
	echo "Los datos fueron env&iacute;ados por get, los datos son: <br /> El nombre es: ".$_GET["nombre_txt"]."<br/>El password es: ".$_GET["password_txt"];

} else if(isset($_POST["enviar_btn"])){
	echo "Los datos fueron env&iacute;ados por post, los datos son: <br /> El nombre es: ".$_POST["nombre_txt"]."<br/>El password es: ".$_POST["password_txt"];
}






?>