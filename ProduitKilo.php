<?php
	require_once("Produit.php");

	class ProduitKilo extends Produit{
		
		private $prixKilo;
		
		public function __construct($nom, $prix){
			parent::__construct($nom);
			$this->prixKilo = $prix;
		}
		public function __toString(){
			return  "<br>Produit : ".$this->nom.
					"<br>Prix : ".$this->prixKilo."€/Kilo".
					"<br>Produit N°".self::$compteurProduit."<br>";
		}
		public function calculPrix($kilos){
			return $this->prixKilo * $kilos;
		}
	}
?>