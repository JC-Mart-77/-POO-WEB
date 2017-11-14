<?php
	include("../class/class_conexion.php");
	$objConexion = new Conexion();
	switch ($_GET["accion"]) {
	 	case "guardar":
	 		include("../class/class_usuario.php");
	 		$usuario = new Usuario(
	 				null,
					$_POST["inputText"],
					$_POST["inputEmail"],
					$_POST["inputPassword"],
					1
			);

			$usuario->insertarRegistro($objConexion);

	 	break;
	 	
	 		case "guardar-noticia":
	 		include("../class/class-noticias.php");
	 		//categorias
         
	 		$noticia = new Noticia(
	 				null,
	 				juan,
					$_POST["file-img"],
					$_POST["txt-titulo"],
					$_POST["txt-contenido"],
					$_POST["date"],
					1
			);

			$noticia->insertarRegistroNoticia($objConexion);

	 	break;
	 	
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
	 $objConexion->cerrarConexion();
?>