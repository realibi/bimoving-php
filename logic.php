<?php
require_once __DIR__ . '/vendor/autoload.php';

use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'bimoving_db',
    'server' => 'srv-db-pgsql01.ps.kz:5432',
    'username' => 'bimoving_root',
    'password' => 'Gw62y3r^'
]);

function sendMessageBot($messageText){
    $bot_users_chat_ids = [];

    $bot_token = "1359640888:AAFmkHuttzV3qPpq-0H2SsPQi7He_7o_2EU";
    $getUpdatesUrl = "https://api.telegram.org/bot" . $bot_token . "/getUpdates";
    $json = file_get_contents($getUpdatesUrl);
    $result = json_decode($json, true);
    $messagesCount = count($result["result"]);

    for($i = 0; $i < $messagesCount; $i++){
        array_push($bot_users_chat_ids, $result["result"][$i]["message"]["from"]["id"]);
    }

    $bot_users_chat_ids = array_unique($bot_users_chat_ids);

    for($i = 0; $i < count(array_keys($bot_users_chat_ids)); $i++){
        $sendMessageUrl = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $bot_users_chat_ids[array_keys($bot_users_chat_ids)[$i]] . "&text=" . urlencode($messageText);
        file_get_contents($sendMessageUrl);
    }
}

if($_POST["movingForm"]){
    $currentAddress = $_POST["currentAddress"];
    $movingAddress = $_POST["movingAddress"];
    $movingDate = $_POST["movingDate"];
    $flatArea = $_POST["flatArea"];
    $movingDuration = $_POST["movingDuration"];
    $oldFlatCleaning = false;
    $newFlatCleaning = false;
    if($_POST["oldFlatCleaning"] == "on"){
        $oldFlatCleaning = true;
    }
    if($_POST["newFlatCleaning"]  == "on"){
        $newFlatCleaning = true;
    }
    $clientName = $_POST["clientName"] ;
    $clientSurname = $_POST["clientSurname"] ;
    $clientPhoneNumber = $_POST["clientPhoneNumber"] ;
    $timeToCall = $_POST["timeToCall"] ;
    $contacted = false;

    $sameData = $db->select("movingrequests", "*", [
        "currentAddress" => $currentAddress,
        "movingAddress" => $movingAddress,
        "movingDate" => $movingDate
    ]);

    if(!(count($sameData) > 0)){
        $db->insert('movingrequests', [
            'currentAddress' => $currentAddress,
            'movingAddress' => $movingAddress,
            'movingDate' => $movingDate,
            'flatArea' => $flatArea,
            'movingDuration' => $movingDuration,
            'oldFlatCleaning' => $oldFlatCleaning,
            'newFlatCleaning' => $newFlatCleaning,
            'clientName' => $clientName,
            'clientSurname' => $clientSurname,
            'clientPhoneNumber' => $clientPhoneNumber,
            'timeToCall' => $timeToCall,
            'contacted' => $contacted,
        ]);
    }

    $oldFlatCleaning = ($oldFlatCleaning) ? "да" : "нет";
    $newFlatCleaning = ($newFlatCleaning) ? "да" : "нет";

    $messageText = "Новый запрос на переезд!\n" .
        "Старый адрес: " . $currentAddress . ".\n" .
        "Новый адрес: " . $movingAddress . ".\n" .
        "Дата: " . $movingDate . ".\n" .
        "Площадь: " . $flatArea . " кв.м.\n" .
        "Длительность: " . $movingDuration . " ч.\n" .
        "Уборка старой кв: " . $oldFlatCleaning . ".\n" .
        "Уборка новой кв: " . $newFlatCleaning . ".\n" .
        "Имя: " . $clientName . ".\n" .
        "Фамилия: " . $clientSurname . ".\n" .
        "Телефон: " . $clientPhoneNumber . ".\n" .
        "Лучше звонить: " . $timeToCall . ".\n";

    sendMessageBot($messageText);
    header("Location: success.php");

}elseif($_POST["transportationForm"]){
    $currentAddress = $_POST["currentAddress"];
    $newAddress = $_POST["newAddress"];
    $phoneNumber = $_POST["phoneNumber"];
    $transportationDate = $_POST["transportationDate"];
    $transportationDuration = $_POST["transportationDuration"];
    $contacted = false;

    $db->insert('transportationrequests', [
        'currentAddress' => $currentAddress,
        'newAddress' => $newAddress,
        'phoneNumber' => $phoneNumber,
        'transportationDate' => $transportationDate,
        'transportationDuration' => $transportationDuration,
        'contacted' => $contacted,
    ]);

    $messageText = "Новый запрос на грузоперевозку!\n" .
        "Откуда: " . $currentAddress . ".\n" .
        "Куда: " . $newAddress . ".\n" .
        "Телефон: " . $phoneNumber . ".\n" .
        "Дата: " . $transportationDate . ".\n" .
        "Длительность: " . $transportationDuration . " ч.\n";

    sendMessageBot($messageText);
    header("Location: success.php");
}