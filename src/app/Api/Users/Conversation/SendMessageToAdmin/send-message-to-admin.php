<?php
if($telegramApi->getIs_message()){
    $telegramApi->forwardMessage(ADMIN_CHAT_ID,$telegramApi->getChat_id() ,$telegramApi->getMessage_id());
}    
?>