<?php

if ($telegramApi->getIs_reply_message()) {
    setManualLog("Notif : " . $telegramApi->getReply_message_Text());
    $user_id = explode('-', $telegramApi->getReply_message_Text())[0];
    $telegramApi->sendMessage($telegramApi->getText(), $user_id);
}
