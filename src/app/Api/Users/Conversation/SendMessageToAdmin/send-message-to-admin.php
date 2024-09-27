<?php
if($telegramApi->getIs_message()){
    $telegramApi->sendMessage($telegramApi->getText() , ADMIN_CHAT_ID);
}    
?>