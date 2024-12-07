<?php
if (strpos($getText, '/start') === 0) {
    $text = "لطفا پیام خود را ارسال نمایید .";
    $telegramApi->sendMessage($text);

    if (!$user) {
        if (explode(' ', $telegramApi->getText())[1] != null) {
            $invited_by_user_id = $sql->table('users')->select()->where('invite_link', BOT_USERNAME . "?start=" . explode(' ', $telegramApi->getText())[1])->first();
            if ($invited_by_user_id) {
                if ($user['invited_by_user_id '] == null) {
                    $invited_by_user_id = $invited_by_user_id['id'];
                }
            }
        }

        $sql->table('users')->insert(
            [
                'user_id',
                'first_name',
                'last_name',
                'username',
                'is_bot',
                'is_permium',
                'invite_link',
                'invited_by_user_id',
                'step',
                'status_bot_used',
            ],
            [
                $telegramApi->getUser_id(),
                $telegramApi->getFirst_name(),
                $telegramApi->getLast_name(),
                $telegramApi->getUsername(),
                $telegramApi->getIs_bot(),
                $telegramApi->getIs_permium(),
                BOT_USERNAME . "?start=" . hash('md2', $telegramApi->getUser_id()),
                $invited_by_user_id,
                'home',
                0,
            ]
        );
    } else {
        $res = $sql->table('users')->where('user_id', $user['user_id'])->update(
            [
                'user_id',
                'first_name',
                'last_name',
                'username',
                'is_permium',
                'step',
                'status_bot_used',
            ],
            [
                $telegramApi->getUser_id(),
                $telegramApi->getFirst_name(),
                $telegramApi->getLast_name(),
                $telegramApi->getUsername(),
                $telegramApi->getIs_permium(),
                'home',
                1,
            ]
        );
    }
}

include_once 'Conversation/SendMessageToUser/send-message-to-users.php';
include_once 'Conversation/SendMessageToAdmin/send-message-to-admin.php';
