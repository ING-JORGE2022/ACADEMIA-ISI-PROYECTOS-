<?php
	session_start();
	$usuario = $_POST['txtusuario'];
	echo $usuario;
	$pass = $_POST['txtpassword'];
	echo "<br>";
	echo $pass;

	$listaTrabajador = array(
			array(
					"nombre"=>"Antonio",
					"apellido"=>"Fuentes",
					"dni"=>"43456767",
					"celular"=>"926437062",
					"usuario"=>"antonio",
					"password"=>"123456"
			),
			array(
					"nombre"=>"Maria",
					"apellido"=>"Espinoza",
					"dni"=>"42321234",
					"celular"=>"984345678",
					"usuario"=>"maria",
					"password"=>"maria123"
			),
			array(
					"nombre"=>"Karen",
					"apellido"=>"Piscoya",
					"dni"=>"42321234",
					"celular"=>"982123456",
					"usuario"=>"karen",
					"password"=>"piscoya"
			),
            array(
                    "nombre"=>"Jose",
                    "apellido"=>"Mendoza",
                    "dni"=>"78234345",
                    "celular"=>"982343456",
                    "usuario"=>"jose",
                    "password"=>"jose5"
            ),
            array(
                    "nombre"=>"Jorge",
                    "apellido"=>"romero",
                    "dni"=>"78234345",
                    "celular"=>"3243713936",
                    "usuario"=>"JORGE2022",
                    "password"=>"jorge123"
            )
		);

	$existeUsuario = false;
	foreach ($listaTrabajador as $indice => $valor) {
		if($valor['usuario']==$usuario && $valor['password']==$pass){
			$existeUsuario = true;
		}else{

		}
	}

	if($existeUsuario){
		header('Location: inicio.php');
	}else{
		header('Location: index.php?idx=1');
	}

?>