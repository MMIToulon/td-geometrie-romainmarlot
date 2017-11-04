<?php
	require_once("ProduitKilo.php");
	
	$banane = new ProduitKilo("Banane", 5);
	echo $banane;
	$tomate = new ProduitKilo("Tomate", 3);
	echo $tomate;
	
	$prix = $banane->calculPrix(25);
	echo "<br>Pour 25 Kilos de bananes cela coutera : ".$prix."€.";
	$prix = $tomate->calculPrix(25);
	echo "<br>Pour 25 Kilos de tomates cela coutera : ".$prix."€.";
?>