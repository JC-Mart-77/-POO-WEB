<?php

	class Usuario{

		private $CodigoUsuario;
		private $NombreUsuario;
		private $ContrasenaUsuario;

		public function __construct($CodigoUsuario,
					$NombreUsuario,
					$ContrasenaUsuario){
			$this->CodigoUsuario = $CodigoUsuario;
			$this->NombreUsuario = $NombreUsuario;
			$this->ContrasenaUsuario = $ContrasenaUsuario;
		}
		public function getCodigoUsuario(){
			return $this->CodigoUsuario;
		}
		public function setCodigoUsuario($CodigoUsuario){
			$this->CodigoUsuario = $CodigoUsuario;
		}
		public function getNombreUsuario(){
			return $this->NombreUsuario;
		}
		public function setNombreUsuario($NombreUsuario){
			$this->NombreUsuario = $NombreUsuario;
		}
		public function getContrasenaUsuario(){
			return $this->ContrasenaUsuario;
		}
		public function setContrasenaUsuario($ContrasenaUsuario){
			$this->ContrasenaUsuario = $ContrasenaUsuario;
		}
		public function __toString(){
			return "CodigoUsuario: " . $this->CodigoUsuario . 
				" NombreUsuario: " . $this->NombreUsuario . 
				" ContrasenaUsuario: " . $this->ContrasenaUsuario;
		}
	}
?>