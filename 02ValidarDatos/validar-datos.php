<?php  
	$nombre = "jose";
	$password = "1234";


	if (isset($_GET["enviar_hdn"])) {
		if ($nombre == $_GET["nombre_txt"] && $password== $_GET["password_txt"]) {

			echo "Bienvenido $nombre";
		} else {
			echo "Usuario no encontrado intente de nuevo";
		}
		
	}

	$nombre = "jose";
	$password = "1234";


	if (isset($_POST["enviar_hdn"])) {
		if ($nombre == $_POST["nombre_txt"] && $password== $_POST["password_txt"]) {

			echo "Bienvenido $nombre";
			echo "Tus datos son: ".$_POST["nombre_txt"]." y tu contrasenia es: ".$_POST["password_txt"];
		} else {
			//header("Location: formulario.php?$error=si");
			echo "Usuario no encontrado intente de nuevo";
		}
		
	}






?>