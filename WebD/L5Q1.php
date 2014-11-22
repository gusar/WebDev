<?php
	$cities = array(
		"Tokyo", 
		"Mexico City", 
		"New York City", 
		"Mumbai", 
		"Seoul", 
		"Shanghai", 
		"Lagos", 
		"Buenos Aires", 
		"Cairo", 
		"London"
		);

	$cities[] = "Los Angeles";
	$cities[] = "Calcutta";
	$cities[] = "Osaka";
	$cities[] = "Beijing";

	sort($cities);

	foreach($cities as $k => $v){
		echo "<li> $v, </li>";
	}
?>