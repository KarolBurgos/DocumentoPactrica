<?php

    $server = "181.62.161.60";
    $user = "usuarios";
    $pass = "grupocrecer321";
    $bd = "protegemos";

    //Creamos la conexión
    $conexion = mysqli_connect($server, $user, $pass,$bd) 
    or die("Ha sucedido un error inexperado en la conexion de la base     de datos");


	$nombre =$_POST["nombre"];
	$identificacion =$_POST["identificacion"];
	$ciudad =$_POST["ciudad"];
	$barrio =$_POST["barrio"];
	$direccion =$_POST["direccion"];
	$telefono =$_POST["telefono"];
	$correo =$_POST["correo"];
	$Sql_Query ="insert into suscribete (nombre,identificacion,ciudad,barrio,direccion,telefono,correo) values ('$nombre','$identificacion','$ciudad','$barrio','$direccion','$telefono','$correo')";

	if(mysqli_query($conexion,$Sql_Query))
	{
	    echo("data inserted");
	}
	else
	{
	  echo "Error: " . $sql . "<br>" . $conn->error . "<br> Error Code = ".$conn->errno;
	}

?>