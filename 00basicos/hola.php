<?php
//comentario de una sola linea
/*comentarios 
de 
dos lineas*/

echo "Hola mundo";

echo "Hola mundo 2 aprendiendo </br><h1>php </h1> ";
//Variables
$nombre = "Jose";
$Nombre = "Manuel";
//concatenacion de cadenas y variables
echo $nombre."&nbsp;".$Nombre; //concatenar se usa el simbolo de .

echo "<br />";
$num1 = 5;
$num2 = 10;
$suma= $num1+$num2;

echo $suma;
//con \ escapamos y sale el texto completo y no el valor.
echo "<br/> La variable \$suma tiene el valor de: $suma";
//funcion if
$modulo = $num2 % 2;
echo "</br>";
if ($modulo == 0) {
	echo "</b> El m&oacute;dulo es: $modulo y es numero par";
}else{

	echo "el numero es impar";
}

echo "<br/>";
//funcion for
for ($i=0; $i <=10 ; $i++) { 
	echo $i."<br/>";
}

?>