<?php
$loader = require __DIR__.'/vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('202559226:AAEu2P5-OTOZMIeSQFDsEF4jizZu2rcTkHM');

$response = $telegram->getWebhookUpdates();
foreach ($response as $update) {
	// if ($update->getMessage()->getText() == '/start') {
	// 	$keyboard = [
	// 	    ['7', '8', '9'],
	// 	    ['4', '5', '6'],
	// 	    ['1', '2', '3'],
	// 	         ['0']
	// 	];

	// 	$reply_markup = $telegram->replyKeyboardMarkup([
	// 	  'keyboard' => $keyboard, 
	// 	  'resize_keyboard' => true, 
	// 	  'one_time_keyboard' => true
	// 	]);

	// 	$response = $telegram->sendMessage([
	// 	  	'chat_id' => $update->getMessage()->getChat()->get('id'), 
 //  			'text' => '```Hello World``` + *die!!!*',
	// 	  	'reply_markup' => $reply_markup
	// 	]);
	// }
	$keyboard = [
	    ['7', '8', '9'],
	    ['4', '5', '6'],
	    ['1', '2', '3'],
	         ['0']
	];

	$reply_markup = $telegram->replyKeyboardMarkup([
	  'keyboard' => $keyboard, 
	  'resize_keyboard' => true, 
	  'one_time_keyboard' => true
	]);

	$response = $telegram->sendMessage([
	  	'chat_id' => $update->getMessage()->getChat()->get('id'), 
			'text' => '```Hello World``` + *die!!!*',
	  	'reply_markup' => $reply_markup
	]);
}
