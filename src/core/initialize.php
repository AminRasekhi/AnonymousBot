<?php

namespace src\core;



if (!defined("ADMIN_CHAT_ID")) {
    define("ADMIN_CHAT_ID", ["127429408", "5618016240", "5477776205"]);
}
if (!defined("TOKEN")) {
    define("TOKEN", '7813471648:AAHsc-nuCsplPIYKAds25scuBteV8zwA_wA');
}
if (!defined("DOMAIN")) {
    define('DOMAIN', 'https://moblekhoshrang.ir/');
}
if (!defined('API')) {
    define('API', "https://api.telegram.org/bot" . TOKEN . "/");
}
if (!defined('BOT_USERNAME')) {
    define('BOT_USERNAME', 'https://t.me/AsanDropSupport_Bot');
}
if (!defined('BOT_NAME')) {
    define('BOT_NAME', 'پشتیبانی آسان دراپ');
}
//DB Config
if (!defined('DB_NAME')) {
    /// local ///
    // define('DB_NAME', 'eventBot');

    /// host ///
    define('DB_NAME', 'moblekho_asan_drop_support');
}
if (!defined('DB_USERNAME')) {
    /// local ///
    // define('DB_USERNAME', 'root');

    /// host ///
    define('DB_USERNAME', 'moblekho_hmd');
}
if (!defined('DB_PASSWORD')) {
    /// local ///
    // define('DB_PASSWORD', '');

    /// host ///
    define('DB_PASSWORD', 'W!(ji}H(V$!e');
}
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
if (!defined('PROFILE_BOT_ID')) {
    define('PROFILE_BOT_ID', 'AgACAgQAAxkBAAII7Wbpz9SgrWwF-7tPirFxjM18dz2JAAI4wjEbG29IU1r_tRiIoSF8AQADAgADeQADNgQ');
}

// https://api.telegram.org/bot6690815299:AAEBLpCN_tuDe8ZpLwNvwUvOYlwAoRItqGc/
// https://api.telegram.org/bot6690815299:AAEBLpCN_tuDe8ZpLwNvwUvOYlwAoRItqGc/setWebHook?url=https://moblekhoshrang.ir/TelegramBot/src/app/Api/index.php