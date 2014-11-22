<?php
	$filename = "lab5.1";
	$filename2 = "lab5.2";
	$first = file($filename);
	$second = file($filename2);

/*	

	foreach($second as $k => $line){
		echo "$line<br>";
	}*/
	file_put_contents($filename, $second, FILE_APPEND | LOCK_EX);

	foreach($first as $k => $line){
		echo "$line<br>";
	}
?>	