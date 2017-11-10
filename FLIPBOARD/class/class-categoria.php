<?php

	class Categoria{

		private $CodigoCategoria;
		private $NombreCategoria;

		public function __construct($CodigoCategoria,
					$NombreCategoria){
			$this->CodigoCategoria = $CodigoCategoria;
			$this->NombreCategoria = $NombreCategoria;
		}
		public function getCodigoCategoria(){
			return $this->CodigoCategoria;
		}
		public function setCodigoCategoria($CodigoCategoria){
			$this->CodigoCategoria = $CodigoCategoria;
		}
		public function getNombreCategoria(){
			return $this->NombreCategoria;
		}
		public function setNombreCategoria($NombreCategoria){
			$this->NombreCategoria = $NombreCategoria;
		}
		public function __toString(){
			return "CodigoCategoria: " . $this->CodigoCategoria . 
				" NombreCategoria: " . $this->NombreCategoria;
		}
	}
?>