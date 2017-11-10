<?php

	class Comentario{

		private $CodigoComentario;
		private $TextoComentario;

		public function __construct($CodigoComentario,
					$TextoComentario){
			$this->CodigoComentario = $CodigoComentario;
			$this->TextoComentario = $TextoComentario;
		}
		public function getCodigoComentario(){
			return $this->CodigoComentario;
		}
		public function setCodigoComentario($CodigoComentario){
			$this->CodigoComentario = $CodigoComentario;
		}
		public function getTextoComentario(){
			return $this->TextoComentario;
		}
		public function setTextoComentario($TextoComentario){
			$this->TextoComentario = $TextoComentario;
		}
		public function __toString(){
			return "CodigoComentario: " . $this->CodigoComentario . 
				" TextoComentario: " . $this->TextoComentario;
		}
	}
?>