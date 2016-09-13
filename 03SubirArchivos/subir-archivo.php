<?php
//Se crea una variable $_FILES

	foreach ($_FILES["archivo_fls"] as $clave => $valor) {
		echo "Propiedad: $clave --- Valor: $valor <br/>";
	}
	
	$archivo = $_FILES["archivo_fls"]["tmp_name"];  //recibiendo el archivo
	$destino = "Archivos/".$_FILES["archivo_fls"]["name"]; //guardando el archivo en la carpeta Archivos

  //funcion para subir archivos con dos parametros y el nombre y el destino
	move_uploaded_file($archivo, $destino);
	

	//subir solo archivos de texto plano
	if ($_FILES["archivo_fls"]["type"] =="text/plain") {
		echo "Arcivo de texto plano subido correctamente";
	} else {
		echo "El archivo no es de texto plano.";
	}
	



  ?>