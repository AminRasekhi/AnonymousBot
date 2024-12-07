<?php
if ($telegramApi->getIs_message() && !in_array($telegramApi->getChat_id(), ADMIN_CHAT_ID)) {
    foreach (ADMIN_CHAT_ID as $admin_chat_id) {
        $telegramApi->forwardMessage($admin_chat_id, $telegramApi->getChat_id(), $telegramApi->getMessage_id());
        $telegramApi->sendMessage($telegramApi->getUser_id() . "-@" . $telegramApi->getUsername() . PHP_EOL . "برای پاسخ به پیام بالا روی این پیام reply کنید و پیام خود را ارسال نمایید .",  $admin_chat_id);
    }
    $telegramApi->sendMessage("پیام شما با موفقیت برای ادمین ارسال شد . ");
}
