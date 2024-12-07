<?php
if ($telegramApi->getIs_message() && $telegramApi->getChat_id() != ADMIN_CHAT_ID) {
    $telegramApi->forwardMessage(ADMIN_CHAT_ID, $telegramApi->getChat_id(), $telegramApi->getMessage_id());
    $telegramApi->sendMessage($telegramApi->getUser_id() . "-@" . $telegramApi->getUsername() . PHP_EOL . "برای پاسخ به پیام بالا روی این پیام reply کنید و پیام خود را ارسال نمایید .",  ADMIN_CHAT_ID);
    $telegramApi->sendMessage("پیام شما با موفقیت برای ادمین ارسال شد . ");
}
