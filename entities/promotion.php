<?PHP
class promotion{
	protected $pourcentage;
    public $dateDebut;
    public $dateFin;
    public $idProduit;
	
	function __construct($pourcentage,$dateDebut,$dateFin,$idProduit){
		$this->pourcentage=$pourcentage;
        $this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
		$this->idProduit=$idProduit;

	}


	function getPourcentage(){
		return $this->pourcentage;
	}
	function setPourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function getdateDebut(){
		return $this->dateDebut;
	}
	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
    }
    function getdateFin(){
		return $this->dateFin;
	}
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
	}

	function getidProduit(){
		return $this->idProduit;
	}
	function setdidProduit($idProduit){
		$this->idProduit=$idProduit;
	}
	
}

?>