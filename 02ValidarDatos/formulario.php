<!DOCTYPE html>
<html lang="es">


<head>
	<title>Validaci&oacute;n de datos con php</title>
    <meta charset="utf-8">
    <!--Creando  validaciones javascrrip-->
     <script>
        
        function validarDatosGet(){
            
            var verificar = true;
            
            if (!document.valida_datos_get_frm.nombre_txt.value) {
                
                alert("El campo nombre es requerido");
                document.valida_datos_get_frm.nombre_txt.focus();
                verificar=false;


            }else if (!document.valida_datos_get_frm.password_txt.value) {
                
                alert("El campo password es requerido");
                document.valida_datos_get_frm.password_txt.focus();
                verificar=false;
            }else if(!document.valida_datos_get_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1].checked){
               
                alert("Seleccione el sexo");
                document.valida_datos_get_frm.sexo_rdo[0].focus();
                verificar = false;


            }if (verificar) {

            document.valida_datos_get_frm.submit();

            }



        }
            
        
        
        


         function validarDatosPOST(){
            var verificar = true;
            
            if (!document.valida_datos_post_frm.nombre_txt.value) {
                
                alert("El campo nombre es requerido");
                document.valida_datos_post_frm.nombre_txt.focus();
                verificar=false;


            }else if (!document.valida_datos_post_frm.password_txt.value) {
                
                alert("El campo password es requerido");
                document.valida_datos_post_frm.password_txt.focus();
                verificar=false;
            }else if(!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1].checked){
               
                alert("Seleccione el sexo");
                document.valida_datos_post_frm.sexo_rdo[0].focus();
                verificar = false;


            }if (verificar) {

            document.valida_datos_post_frm.submit();

            }



        }
            
        
        <!-- llamar funcion-->
        window.onload = function(){ document.getElementById("enviar-get").onclick = validarDatosGet;}
        window.onload = function(){ document.getElementById("enviar-post").onclick = validarDatosPOST;
        }
    
    


    </script>
</head>
<body>

    <?php 
    //$_GET["error"] = null; 
    //if ($_POST["error"] == "si") {
    //    echo "<span style = \"color: #F00; font-size:2em; \">//Verifica tus datos   </span>";
    //} 





    ?>
	<hgroup><h1> Formulario con metodo GET</h1></hgroup>

	<form name="valida_datos_get_frm" action="validar-datos.php" method="get" enctype="application/x-www-form-urlencoded">
    Ingresa tu nombre: 
    <input type="text" name="nombre_txt">
    <br/><br/>
    Ingresa tu password:
    <input type="password" name="password_txt">
    <br/><br/>
    <input type="radio" name="sexo_rdo" value="M" />
    Masculino&nbsp;
    <input type="radio" name="sexo_rdo" value="F" />
    Femenino&nbsp;
    <br/><br/>
    <!-- los botones hidden son botones que no se van a ver y principalmente sirven para enviar informacion de usuario que no dependan de información.-->
    <input type="hidden" name="enviar_hdn" value="get" />
    <input type="button" id="enviar-get" name="enviar_btn" value="Enviar-GETT"/>
    </form>

        <hgroup><h1> Formulario con metodo POST</h1></hgroup>

    <form name="valida_datos_post_frm" action="validar-datos.php" method="post" enctype="application/x-www-form-urlencoded">
    Ingresa tu nombre: 
    <input type="text" name="nombre_txt">
    <br/><br/>
    Ingresa tu password:
    <input type="password" name="password_txt">
    <br/><br/>
    <input type="radio" name="sexo_rdo" value="M" />
    Masculino&nbsp;
    <input type="radio" name="sexo_rdo" value="F" />
    Femenino&nbsp;
    <br/><br/>
    <!-- los botones hidden son botones que no se van a ver y principalmente sirven para enviar informacion de usuario que no dependan de información.-->
    <input type="hidden" name="enviar_hdn" value="post" />
    <input type="button" id="enviar-post" name="enviar_btn" value="Enviar-POST"/>
    </form>

</body>
</html>