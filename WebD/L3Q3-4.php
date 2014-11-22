<?php
	header('Content-type: text/plain');

	echo "5>6 is";
	if(5 > 6) echo " true";
	else echo " false";
	echo "\n";

	$al = true;
	echo "al is";
	if($al == true) echo " true";
	else echo " false";
	echo "\n";

	$x = 0;
	echo "x < 1 is";
	if($x > 1) echo " true";
	else echo " false";
	echo "\n";

	if(1 > "1") echo("Equal");
	echo "\n";
	if (1 == "1") echo("Identity");
	echo "\n";
?>