<?php
require_once __DIR__ . '/vendor/autoload.php';
use Klein\Request;
use Klein\Response;
use Klein\Klein;
use models\MovingRequest;
use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'bimovingdb',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
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

final class RenderEngine {
    private static $engine;

    private function __construct()
    {
        self::$engine = new Smarty();
        self::$engine->setTemplateDir("Views");
        self::$engine->setCompileDir("views/_compiled");
    }

    static function get() {
        if (!self::$engine instanceof Smarty)
            new self();

        return self::$engine;
    }

    static function render($template_name, $variables = []){
        $e = RenderEngine::get();
    
        if ($variables)
            foreach ($variables as $key => $value)
                $e->assign($key, $value);
    
        return $e->display($template_name . ".tpl");
    }
}

$router = new Klein();

$router->respond('GET', "/", function (Request $request, Response $response) {
    return RenderEngine::render("index");
});

$router->with("/transportation", function () use ($router, $db){
    $router->get("/?", function (Request $request, Response $response) {
        return RenderEngine::render("transportationView");
    });

    $router->post("/create/", function (Request $request, Response $response) use($db) {
        $currentAddress = $request->param("currentAddress");
        $newAddress = $request->param("newAddress");
        $phoneNumber = $request->param("phoneNumber");
        $transportationDate = $request->param("transportationDate");
        $transportationDuration = $request->param("transportationDuration");
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

        //sendMessageBot($messageText);

        return RenderEngine::render("success");
    });
});

$router->with("/move", function () use ($router, $db){
    $router->get("/?", function (Request $request, Response $response) {
        return RenderEngine::render("movingRegistrationView");
    });
    $router->post("/create/", function (Request $request, Response $response) use($db) {
        $currentAddress = $request->param("currentAddress");
        $movingAddress = $request->param("movingAddress");
        $movingDate = $request->param("movingDate");
        $flatArea = $request->param("flatArea");
        $movingDuration = $request->param("movingDuration");
        $oldFlatCleaning = false;
        $newFlatCleaning = false;
        if($request->param("oldFlatCleaning") == "on"){
            $oldFlatCleaning = true;
        }
        if($request->param("newFlatCleaning") == "on"){
            $newFlatCleaning = true;
        }
        $clientName = $request->param("clientName");
        $clientSurname = $request->param("clientSurname");
        $clientPhoneNumber = $request->param("clientPhoneNumber");
        $timeToCall = $request->param("timeToCall");
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

            //sendMessageBot($messageText);

        return RenderEngine::render("success");
    });
});

$router->dispatch();
