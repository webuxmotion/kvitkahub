<?php

require __DIR__.'/../vendor/autoload.php';

use Telegram\Bot\Api; 

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
 
$telegram = new Api($_ENV['TELEGRAM_BOT_TOKEN']); // замість ''XXXXXXXXXXXXXXXXXXXXXXXXX'' вкажіть ваш токен
$result = $telegram->getWebhookUpdates(); // передаємо у змінну $result повну інформацію про повідомлення користувача
 
$text = $result["message"]["text"]; // текст сообщения
$chat_id = $result["message"]["chat"]["id"]; // унікальний ідентифікатор користувача
$name = $result["message"]["from"]["username"]; // ім'я користувачча
 
if ($text) {
    if ($text == "/start") {
        $reply = "Hi!" . $chat_id;
        $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
    }
    
    if ($text == "/id") {
        $reply = $chat_id;
        $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
    }
}