<?php
$loader = require __DIR__.'/vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('202559226:AAEu2P5-OTOZMIeSQFDsEF4jizZu2rcTkHM');

$response = $telegram->getUpdates();
echo "<pre>";
foreach ($response as $update) {
	var_dump($update->getMessage()->getChat()->get('id'));
	if ($update->getMessage()->getText() == '/start') {
		// $telegram->sendMessage([
		// 		'chat_id' => $update->getMessage()->getChat()->get('id'), 
  // 				'text' => 'Hello World'
		// 	]);
	}
}
echo "===<br>";
var_dump($response);