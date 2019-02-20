<?php
function getUpholdTicker($var){
	header('Content-Type: application/json');
	return file_get_contents('https://api.uphold.com/v0/ticker/'.$var);
}

	if (isset($_POST['currencyPair'])) {
		echo getUpholdTicker($_POST['currencyPair']);
	}else{
		echo getUpholdTicker('USD');
	}

?>
