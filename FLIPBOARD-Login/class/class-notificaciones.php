<?php

	class Notificaciones{

		private $CodigoNotificacion;
		private $FechaDeNotificacion;

		public function __construct($CodigoNotificacion,
					$FechaDeNotificacion){
			$this->CodigoNotificacion = $CodigoNotificacion;
			$this->FechaDeNotificacion = $FechaDeNotificacion;
		}
		public function getCodigoNotificacion(){
			return $this->CodigoNotificacion;
		}
		public function setCodigoNotificacion($CodigoNotificacion){
			$this->CodigoNotificacion = $CodigoNotificacion;
		}
		public function getFechaDeNotificacion(){
			return $this->FechaDeNotificacion;
		}
		public function setFechaDeNotificacion($FechaDeNotificacion){
			$this->FechaDeNotificacion = $FechaDeNotificacion;
		}
		public function toString(){
			return "CodigoNotificacion: " . $this->CodigoNotificacion . 
				" FechaDeNotificacion: " . $this->FechaDeNotificacion;
		}
	}
?>