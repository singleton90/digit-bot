<?php
$loader = require __DIR__.'/vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('202559226:AAEu2P5-OTOZMIeSQFDsEF4jizZu2rcTkHM');

$response = $telegram->getUpdates();
echo "<pre>";
foreach ($response as $update) {
	var_dump($update);
}
echo "===<br>";
var_dump($response);