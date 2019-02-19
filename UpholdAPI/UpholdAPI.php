<?php 
if (isset($_POST['currencyPair']) && $_POST['currencyPair']) {
	echo getUpholdTicker($_POST['currencyPair']);
}else{
	echo getUpholdTicker("BTCUSD");
}

function getUpholdTicker($currPair){

	header('Content-Type: application/json');
	return file_get_contents('https://api.uphold.com/v0/ticker/USD');

}


?>