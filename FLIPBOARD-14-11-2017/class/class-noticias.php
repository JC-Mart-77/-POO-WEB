private $CodigoNoticia;
		private $DescripcionNoticia;
		private $NombreNoticia;
		private $FechaNoticia;
		private $Foto;

		public function __construct($CodigoNoticia,
					$DescripcionNoticia,
					$NombreNoticia,
					$FechaNoticia,
					$Foto){
			$this->CodigoNoticia = $CodigoNoticia;
			$this->DescripcionNoticia = $DescripcionNoticia;
			$this->NombreNoticia = $NombreNoticia;
			$this->FechaNoticia = $FechaNoticia;
			$this->Foto = $Foto;
		}
		public function getCodigoNoticia(){
			return $this->CodigoNoticia;
		}
		public function setCodigoNoticia($CodigoNoticia){
			$this->CodigoNoticia = $CodigoNoticia;
		}
		public function getDescripcionNoticia(){
			return $this->DescripcionNoticia;
		}
		public function setDescripcionNoticia($DescripcionNoticia){
			$this->DescripcionNoticia = $DescripcionNoticia;
		}
		public function getNombreNoticia(){
			return $this->NombreNoticia;
		}
		public function setNombreNoticia($NombreNoticia){
			$this->NombreNoticia = $NombreNoticia;
		}
		public function getFechaNoticia(){
			return $this->FechaNoticia;
		}
		public function setFechaNoticia($FechaNoticia){
			$this->FechaNoticia = $FechaNoticia;
		}
		public function getFoto(){
			return $this->Foto;
		}
		public function setFoto($Foto){
			$this->Foto = $Foto;
		}
		public function __toString(){
			return "CodigoNoticia: " . $this->CodigoNoticia . 
				" DescripcionNoticia: " . $this->DescripcionNoticia . 
				" NombreNoticia: " . $this->NombreNoticia . 
				" FechaNoticia: " . $this->FechaNoticia . 
				" Foto: " . $this->Foto;
		}
	}
?>