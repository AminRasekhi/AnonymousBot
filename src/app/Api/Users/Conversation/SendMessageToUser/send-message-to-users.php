<?php

if($telegramApi->getIs_reply_message()){
    $telegramApi->sendMessage($telegramApi->getText() , $telegramApi->getReply_message_chat_id());
}

?>