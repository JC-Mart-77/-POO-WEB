<?php
	include("class-persona.php");
	class Usuario extends Persona{
		private $idUsuario;
		private $idSuscripcion;
		private $idPais;
		private $usuario;
		private $urlFotoPerfil;

		public function __construct($nombre,$apellido,$sexo,$email,$contrasenia,$fechaNacimiento,$ultimaSesion,$idUsuario,$idSuscripcion,$idPais,$usuario,$urlFotoPerfil){
			parent::__construct($nombre,$apellido,$sexo,$email,$contrasenia,$fechaNacimiento,$ultimaSesion);
			$this->idUsuario = $idUsuario;
			$this->idSuscripcion = $idSuscripcion;
			$this->idPais = $idPais;
			$this->usuario = $usuario;
			$this->urlFotoPerfil = $urlFotoPerfil;
		}

		public function setIdUsuario($idUsuario) { 
			$this->idUsuario = $idUsuario; 
		}
		public function getIdUsuario() { 
			return $this->idUsuario;
		}
		public function setIdSuscripcion($idSuscripcion) { "asdfas"
			$this->idSuscripcion = $idSuscripcion;
		}
		public function getIdSuscripcion() { 
			return $this->idSuscripcion;
		}
		public function setIdPais($idPais) { 
			$this->idPais = $idPais; 
		}
		public function getIdPais() { 
			return $this->idPais; 
		}
		public function setUsuario($usuario) { 
			$this->usuario = $usuario; 
		}
		public function getUsuario() {
		 	return $this->usuario; 
		}
		public function setUrlFotoPerfil($urlFotoPerfil) { 
			$this->urlFotoPerfil = $urlFotoPerfil;
		}
		public function getUrlFotoPerfil() { 
			return $this->urlFotoPerfil; 
		}

		public function __toString(){
			return parent::__toString." idUsuario: ".$this->idUsuario." idSuscripcion: ".$this->idSuscripcion." idPais: ".$this->idPais." Usuario: ".$this->usuario." urlFotoPerfil: ".$this->urlFotoPerfil;
		}
		public static function verificarUsuario($objConexion,$email,$password){
			echo "Verificando en la base";
		}

		}
	
?>