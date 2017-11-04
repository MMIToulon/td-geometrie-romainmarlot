<?php
	require_once("ProduitUnite.php");
	
	$kiwi = new ProduitUnite("Kiwi", 1);
	echo $kiwi;
	$patate = new ProduitUnite("Patate", 0.5);
	echo $patate;
	
	$prix = $kiwi->calculPrix(10);
	echo "<br>Pour 10 kiwis cela coutera : ".$prix."€.";
	$prix = $patate->calculPrix(10);
	echo "<br>Pour 10 patates cela coutera : ".$prix."€.";
?>