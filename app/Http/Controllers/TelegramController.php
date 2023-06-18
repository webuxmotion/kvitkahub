<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api; 
use Telegram\Bot\FileUpload\InputFile;

class TelegramController extends Controller {

  public static function sendMessage($chatId, $message) {
    $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

    try {
     $telegram->sendMessage(['chat_id' => $chatId, 'text' => $message]);
   
    } catch (\Exception $e) {}
  }

  public static function sendPhoto($chatId, $photo_url, $caption) {
    $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

    try {
      $telegram->sendPhoto([
        'chat_id' => $chatId, 
        'photo' => new InputFile($photo_url),
        'caption' => $caption
    ]);
    } catch (\Exception $e) {}
  }
}
