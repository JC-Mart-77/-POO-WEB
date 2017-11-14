<?php

	class Usuario{

		private $codigoUsuario;
		private $nombreUsuario;
		private $correo;
		private $contrasena;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$nombreUsuario,
					$correo,
					$contrasena,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->nombreUsuario = $nombreUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function __toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Correo: " . $this->correo . 
				" Contrasena: " . $this->contrasena . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}

		public static function verificarUsuario($conexion, $correo,$contrasena){
				$sql = sprintf(
						"SELECT Codigo_Usuario, Codigo_Persona, Codigo_TipoUsuario, Nombre_Usuario, Correo_Usuario, Contrasena_Usuario FROM tbl_usuario WHERE Correo_Usuario = '%s' AND Contrasena_Usuario = '%s'",
						$correo,
						$contrasena
					);
				//echo ($sql);
				$resultado = $conexion->ejecutarConsulta($sql);

				$cantidadRegistros = $conexion->cantidadRegistros($resultado);
				$respuesta=array();
				if ($cantidadRegistros==1){
					$fila = $conexion->obtenerFila($resultado);
					$_SESSION["Codigo_Usuario"] = $fila["Codigo_Usuario"];
					$_SESSION["Correo_Usuario"] = $fila["Correo_Usuario"];
					$_SESSION["Nombre_Usuario"] = $fila["Nombre_Usuario"];
					$respuesta["status"]=1;
					$respuesta["mensaje"]="Si tiene acceso" ;
					$respuesta["Codigo_TipoUsuario"]=$fila['Codigo_TipoUsuario'];
				}else{
					$respuesta["status"]=0;
					$respuesta["mensaje"]="<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>" ;
				}

				echo json_encode($respuesta);
		}


		public function insertarRegistro($conexion){
			$sql = sprintf(
					"INSERT INTO tbl_usuario(Codigo_TipoUsuario,Codigo_Persona, Nombre_Usuario, Correo_Usuario, Contrasena_Usuario) 
					VALUES (%s,%s,'%s','%s','%s')",
					1,
					1,
					$conexion->antiInyeccion($this->nombreUsuario),
					$conexion->antiInyeccion($this->correo),
					$conexion->antiInyeccion($this->contrasena)
			);
			$resultado = $conexion->ejecutarConsulta($sql);
			
		}
	}
?>

