<?php
include('conexion.php');
if(isset($_POST['Ingresar']));
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Tipodeafiliacion=$_POST['Tipodeafiliacion'];
$Email=$_POST['Email'];
$Fecha=date("d/m/y");
//Permite enviar el formulario 
$query="INSERT INTO registro(Nombre, Apellido, Edad, Tipo_afiliacion, Email, Fecha) VALUES ('$Nombre','$Apellido','$Edad','$Tipodeafiliacion','$Email','$Fecha')";
$consulta=mysqli_query($conexion,$query);
//Aca se relaciona la tabla creada en mysql con las variables del formulario
if ($consulta){
  
    header("location:paginaprincipal.php");}
else{
    ?>
       <h3 class='bad'>Ups ha ocurrido un error!</h3>
       <?php
       //Permite hacer una condicion el cual si se cumple lo redirige a la pagina mostrada y si no mostrará un error.
}
