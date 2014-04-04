<?php

	$prijs = 20;
	$geld = 19.95;
	$voldoende = 21;
	$vrienden = 1;
	
	echo "Genoeg geld voor drank? <br />";
	if ($voldoende>= $prijs) {
	echo "klant heeft " . $voldoende . " euro op zak <br />";
	echo "Klant kan de drank kopen";
	} 
	
	if ($geld >= $voldoende){
	echo "Hij heeft onvoldoende geld <br />";
	echo "Hij heeft " . $geld . " euro <br />";
	echo "De drank kost " . $prijs . " euro";
	}

	
?>