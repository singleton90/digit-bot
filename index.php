<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '202559226:AAEu2P5-OTOZMIeSQFDsEF4jizZu2rcTkHM';
$BOT_NAME = 'digitbox_bot';

try {
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    echo $telegram->setWebHook('http://digit-bot.herokuapp.com/hook.php');
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}