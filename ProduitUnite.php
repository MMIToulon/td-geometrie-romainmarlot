<?php
	require_once("Produit.php");

	class ProduitUnite extends Produit{
		
		private $prixUnite;
		
		public function __construct($nom, $prix){
			parent::__construct($nom);
			$this->prixUnite = $prix;
		}
		public function __toString(){
			return  "<br>Produit : ".$this->nom.
					"<br>Prix : ".$this->prixUnite."€/Unite".
					"<br>Produit N°".self::$compteurProduit."<br>";
		}
		public function calculPrix($nombre){
			return $this->prixUnite * $nombre;
		}
	}
?>