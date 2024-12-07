<?php

if ($telegramApi->getIs_reply_message()) {
    $chat_id = explode('-', $telegramApi->getReply_message_Text())[0];
    $username = explode('-', $telegramApi->getReply_message_Text())[1];

    $file_type = $telegramApi->getFile_type();
    if ($file_type != "") {
        $text = $telegramApi->getCaption();
        $file_id = $telegramApi->getFile_id();
    } else {
        $file_type = null;
        $file_id = null;
        $text = $telegramApi->getText();
    }
    sendMedia($text, $username, $chat_id, $file_type, $file_id);
}


function sendMedia($text, $username, $chat_id, $file_type = "message", $file_id = null)
{
    global $telegramApi;

    $media_group_id = null;
    if (isset($media_group_id)) {
    } else {
        switch ($file_type) {
            case 'photo':
                $response = $telegramApi->sendPhoto($file_id, $text, null, $chat_id, "HTML");
                break;
            case 'video':
                $response = $telegramApi->sendVideo($file_id, $text, null, $chat_id, "HTML");
                break;
            case 'audio':
                $response = $telegramApi->sendAudio($file_id, $text, null, $chat_id, "HTML");
                break;
            case 'message':
                $response = $telegramApi->sendMessage($text, $chat_id, null, null, "HTML");
                break;
            case 'animation':
                $response = $telegramApi->sendAnimation($file_id, $text, null, $chat_id, "HTML");
                break;
            default:
                $response = $telegramApi->sendMessage($text, $chat_id, null, null, "HTML");
                break;
        }
    }
    $textForRobot = "پیام شما با موفقیت ارسال شد برای کاربر $username .";

    $telegramApi->sendMessage($textForRobot);
}
