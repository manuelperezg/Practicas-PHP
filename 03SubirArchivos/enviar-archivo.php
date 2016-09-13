<!DOCTYPE html>
<html lang="es">
<head>
 		<meta charset="utf-8">
	<title>	Subir archivos a servidor</title>
</head>
<body>
		<form name="enviar_archivo_frm" action="subir-archivo.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		
		<!-- input de tipo file es para seleccionar un archivo-->

		<!-- input de tipo submit es para enviar archivos del formulario-->
		<hgroup>
			<h1>SUBE TUS ARHVIOS AL SERVIDOR</h1>
			<h2></h2>
		</hgroup>
		<input type="file" name="archivo_fls" />
		<input type="submit" name="subir_btn" value="subir archivo">

		</form>

</body>
</html>