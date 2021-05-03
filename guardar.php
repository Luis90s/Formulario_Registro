<?php

    $usuario = root;
    $password = ""
    $servidor="localhost";
    $basededatos = "bdregistro";

	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('bdregistro');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
    
	//recuperar las variables
	$nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $identidad=$_POST['identidad'];
    $nacimiento=$_POST['nacimiento'];
    $correo=$_POST['correo'];
	$password=$_POST['password'];

	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
                                   '$apellido', 
                                   '$identidad', 
                                   '$nacimiento', 
                                   '$correo', 
                                   '$password')";

	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo un error";
	}else{
		echo"Datos Guardados Correctamente" <br> <a href='index.html'>volver</a>;
	}
?>