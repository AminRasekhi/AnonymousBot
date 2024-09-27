<?php

namespace src\app\Api;

use src\app\Classes\DB;
use src\app\Classes\TelegramAPI;

require_once __DIR__ . "/../../../vendor/autoload.php";
require_once "../../core/initialize.php";

//TelegramAPI Instance
$telegramApi = new TelegramAPI;
// //DB Instance
$sql = new DB();
