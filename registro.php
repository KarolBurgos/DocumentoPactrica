<?php
    $server = "181.62.161.60";
    $user = "root";
    $pass = "";
    $bd = "protegemos";

    //Creamos la conexión
    $conexion = mysqli_connect($server, $user, $pass,$bd) 
    or die("Ha sucedido un error inexperado en la conexion de la base     de datos");



$nombre =$_POST["nombre"];
$correo =$_POST["correo"];
$celular=$_POST["celular"];
$mensaje=$_POST["mensaje"];
$Sql_Query ="insert into contactenos (nombre,correo,celular,mensaje) values ('$nombre','$correo','$celular','$mensaje')";

if(mysqli_query($conexion,$Sql_Query))
{
    echo("data inserted");
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error . "<br> Error Code = ".$conn->errno;
}

?>