<?php
session_start();

echo "<h1>Bienvenidos a la tienda de Compensar</h1>";
?>
<html lang="es">
<!--le indica al navegador que todo el contenido esta en español!-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Compensar</title>
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <!--Conexion con el estilo2 de css!-->
</head>

<fieldset>
        <h1> Tipos de Afiliaciones</h1>
        <h3>☼ Persona: Trabajor Independiente y Pensionado</h3>
        <h3>☼ Empleadores: Persona jurídica, persona natural y servicio doméstico</h3>
        <h3>☼ Afiliiación Grupo Familiar</h3>
        <h3>☼ Afiliiación Independiente o Contratista</h3>
    </fieldset>
    <!--Permite organizar los servicios en grupo-->
<body>

    <center>
<br>
<br>
<form action="paginaprincipal.php" method="post">
    <fieldset>
        <h1>Servicio Otorgado Por La Empresa.</h1>
        <p>Tipo de Afiliacion</br><input type="text" placeholder="Tipo de Afiliación" name="Descripcion"></p>

        <p>Nombre</br><input type="text" placeholder="Nombre" name="Precio1"></p>

        <p>Apellido</br><input type="text" placeholder="Apellido" name="Precio2"></p>

        <p>¿Por que realiza la queja?</br><input type="text" placeholder="Escriba aquí.." name="Precio3"></p>

        <h2></h2>

        <p>¿Como le parece el servicio de Compensar EPS?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio4"></p>
        
        <p>¿Que Puntaje le otorga a la empresa Compensar EPS?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio5"></p>

        <p>¿Cuantas personas de su familia se encuentran afiliados a Cmpensar EPS?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio6"></p>

        <p>¿Cuantas veces ha sido victima del mal trato otorgado por el personal?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio7"></p>

        <p>¿Cuantas veces no ha sido atendido por urgencias?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio8"></p>

        <p>¿Cuantas veces le han cancelado su cita médica?</br><input type="text" placeholder="Responder Con Valores Númericos" name="Precio9"></p>
   

        <input type="submit" value="Responder" name="Responder"> 
        <!--Formulario para realizar la compra agrupado-->
</fieldset>

   
    <?php
    if(isset($_POST["Responder"])){
    $Precio8=$_POST["Precio8"];
    $Precio9=$_POST["Precio9"];
    $Precio7=$_POST["Precio7"];
    $total = $Precio8+$Precio7+$Precio9;
    $prom=($total/3); 
       echo "<h1>La satisfacción es: ". $prom . "</br></h1>";

    }
     
    //Operaciones para realizar un descuento
    
    ?> </form> 
</body></center>
<style>
    body {
        background-image: linear-gradient(to top, #6a85b6 0%, #bac8e0 100%);
      }
    </style>
    <!--Fondo para esta pagina-->
</html>