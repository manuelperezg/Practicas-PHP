<!DOCTYPE html>
<html lang="es">
<head>
	<title>Env&iacute; de datos por GEt y POST</title>
<meta charset="utf-8"/>
</head>
<body>

<!--Metodo get envia datos a traves de la url -->
<!--Metodo post envia datos a traves de encriptacion -->
	<hgroup><h1> Formulario enviado por el m&eacute;todo GET</h1></hgroup>

	<form name = "envia-get_frm" action="envia-datos.php" method="GET" enctype="application/x-www-form-urlencode">

	<label >Ingresa tu Nombre: </label>
	<input type="text" name="nombre_txt" />
	
	<br/><br/>
	<label >Ingresa tu Password: </label>
	<input type="password" name="password_txt" />
	<br/>
	<input type="submit" name="enviar_btn" value="enviar-get" />
</form>
<br/>


	<form name = "envia-post_frm" action="envia-datos.php" method="POST" enctype="application/x-www-form-urlencode">

	<label >Ingresa tu Nombre: </label>
	<input type="text" name="nombre_txt" />
	
	<br/><br/>
	<label >Ingresa tu Password: </label>
	<input type="password" name="password_txt" />
	<br/>
	<input type="submit" name="enviar_btn" value="enviar-post" />
</form>
</body>
</html>