<?php
	$cities = array(
		"Japan" => "Tokyo", 
		"Mexico" => "Mexico City", 
		"USA" => "New York City", 
		"India" => "Mumbai", 
		"Korea" => "Seoul", 
		"China" => "Shanghai", 
		"Nigeria" => "Lagos", 
		"Argentina" => "Buenos Aires", 
		"Egypt" => "Cairo", 
		"England" => "London"
		);


	foreach($cities as $country => $city){
		echo "<li>$city is in $country </li>";
	}
?>