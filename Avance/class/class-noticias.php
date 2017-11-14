<?php

	class Noticia{

		private $codigoNoticia;
		private $autorNoticia;
		private $fotoNoticia;
		private $nombreNoticia;
		private $descripcionNoticia;
		private $fechaNoticia;
		private $flipear;

		public function __construct($codigoNoticia,
					$autorNoticia,
					$fotoNoticia,
					$nombreNoticia,
					$descripcionNoticia,
					$fechaNoticia,
					$flipear){
			$this->codigoNoticia = $codigoNoticia;
			$this->autorNoticia = $autorNoticia;
			$this->fotoNoticia = $fotoNoticia;
			$this->nombreNoticia = $nombreNoticia;
			$this->descripcionNoticia = $descripcionNoticia;
			$this->fechaNoticia = $fechaNoticia;
			$this->flipear = $flipear;
		}
		public function getCodigoNoticia(){
			return $this->codigoNoticia;
		}
		public function setCodigoNoticia($codigoNoticia){
			$this->codigoNoticia = $codigoNoticia;
		}
		public function getAutorNoticia(){
			return $this->autorNoticia;
		}
		public function setAutorNoticia($autorNoticia){
			$this->autorNoticia = $autorNoticia;
		}
		public function getFotoNoticia(){
			return $this->fotoNoticia;
		}
		public function setFotoNoticia($fotoNoticia){
			$this->fotoNoticia = $fotoNoticia;
		}
		public function getNombreNoticia(){
			return $this->nombreNoticia;
		}
		public function setNombreNoticia($nombreNoticia){
			$this->nombreNoticia = $nombreNoticia;
		}
		public function getDescripcionNoticia(){
			return $this->descripcionNoticia;
		}
		public function setDescripcionNoticia($descripcionNoticia){
			$this->descripcionNoticia = $descripcionNoticia;
		}
		public function getFechaNoticia(){
			return $this->fechaNoticia;
		}
		public function setFechaNoticia($fechaNoticia){
			$this->fechaNoticia = $fechaNoticia;
		}
		public function getFlipear(){
			return $this->flipear;
		}
		public function setFlipear($flipear){
			$this->flipear = $flipear;
		}
		public function __toString(){
			return "CodigoNoticia: " . $this->codigoNoticia . 
				" AutorNoticia: " . $this->autorNoticia . 
				" FotoNoticia: " . $this->fotoNoticia . 
				" NombreNoticia: " . $this->nombreNoticia . 
				" DescripcionNoticia: " . $this->descripcionNoticia . 
				" FechaNoticia: " . $this->fechaNoticia . 
				" Flipear: " . $this->flipear;
}

		public function insertarRegistroNoticia($conexion){
			$sql = sprintf(
							
			"INSERT INTO tbl_noticias( Codigo_Comentario, Codigo_Compartir, Codigo_Usuario, Codigo_Like, Autor_Noticia, Foto_Noticia, Nombre_Noticia, Descripcion_Noticia, Fecha_Noticia, flipear)
				VALUES (%s,%s,%s,%s,'%s','%s','%s','%s','%s','%s')",
					1,
					1,
					1,
					1,
					juan,
					$conexion->antiInyeccion($this->fotoNoticia),
					$conexion->antiInyeccion($this->nombreNoticia),
					$conexion->antiInyeccion($this->descripcionNoticia),		
					$conexion->antiInyeccion($this->date),
					1
			);

			//Descomentar esto para depurar
			//echo $sql;
			//var_dump($this->categorias);
			$resultado = $conexion->ejecutarConsulta($sql);
			//$id = $conexion->ultimoId();

			//for ($i=0;$i<sizeof($this->categorias);$i++){
			//	$sql=sprintf(
			//		'INSERT INTO tbl_categorias_x_aplicacion(codigo_aplicacion, codigo_categoria) VALUES (%s,%s)',
			//		$conexion->antiInyeccion($id),
			//		$conexion->antiInyeccion($this->categorias[$i])
			//	); 
			//	$conexion->ejecutarConsulta($sql);
			//}
		//	echo "<b>Registro almacenado con exito</b>";
		}

	}
?>