<?php

	class Persona{

		private $CodigoPersona;
		private $NombrePersona;
		private $CorreoPersona;
		private $FechaDeNacimiento;

		public function __construct($CodigoPersona,
					$NombrePersona,
					$CorreoPersona,
					$FechaDeNacimiento){
			$this->CodigoPersona = $CodigoPersona;
			$this->NombrePersona = $NombrePersona;
			$this->CorreoPersona = $CorreoPersona;
			$this->FechaDeNacimiento = $FechaDeNacimiento;
		}
		public function getCodigoPersona(){
			return $this->CodigoPersona;
		}
		public function setCodigoPersona($CodigoPersona){
			$this->CodigoPersona = $CodigoPersona;
		}
		public function getNombrePersona(){
			return $this->NombrePersona;
		}
		public function setNombrePersona($NombrePersona){
			$this->NombrePersona = $NombrePersona;
		}
		public function getCorreoPersona(){
			return $this->CorreoPersona;
		}
		public function setCorreoPersona($CorreoPersona){
			$this->CorreoPersona = $CorreoPersona;
		}
		public function getFechaDeNacimiento(){
			return $this->FechaDeNacimiento;
		}
		public function setFechaDeNacimiento($FechaDeNacimiento){
			$this->FechaDeNacimiento = $FechaDeNacimiento;
		}
		public function __toString(){
			return "CodigoPersona: " . $this->CodigoPersona . 
				" NombrePersona: " . $this->NombrePersona . 
				" CorreoPersona: " . $this->CorreoPersona . 
				" FechaDeNacimiento: " . $this->FechaDeNacimiento;
		}
	}
?>