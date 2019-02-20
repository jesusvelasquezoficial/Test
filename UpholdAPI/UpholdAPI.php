<?php
header('Content-Type: application/json');
function getUpholdTicker($var){
	return file_get_contents('https://api.uphold.com/v0/ticker/'.$var);
}

$var = isset($_POST['currencyPair']) ? $_POST['currencyPair'] : '';

echo getUpholdTicker($var);

?>
