<?php

	$response = $_POST['hour'];
	if($response < 10) echo "Morning!";
	elseif($response < 18) echo "Day!";
	elseif($response < 23) echo "Evening!";
	elseif($response < 1) echo "Switch off the computer!",'<br>';

?> 