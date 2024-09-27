<?php
    if (strpos($getText, '/start') === 0) {
        $text = 'سلام!
        این ربات توسط تیم --پیمان پلاس پلاس-- نوشته شده است';
        $telegramApi->sendMessage($text);
    }

include_once 'Conversation/SendMessageToAdmin/send-message-to-admin.php';
include_once 'Conversation/SendMessageToUser/send-message-to-users.php';
   