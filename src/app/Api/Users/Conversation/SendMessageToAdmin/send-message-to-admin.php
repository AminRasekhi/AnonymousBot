<?php
if ($telegramApi->getIs_message()) {

    $telegramApi->forwardMessage(ADMIN_CHAT_ID, $telegramApi->getChat_id(), $telegramApi->getMessage_id());
    $telegramApi->sendMessage($telegramApi->getUser_id() . "-@" . $telegramApi->getUsername(),  ADMIN_CHAT_ID);
}
