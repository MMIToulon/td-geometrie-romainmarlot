<?php
	abstract class Produit{
		
		protected $nom;
		protected static $compteurProduit = 0;
		
		public function __construct($nom){
			$this->nom = $nom;
			self::$compteurProduit ++;
		}
		abstract public function calculPrix($nombre);
	}
?>