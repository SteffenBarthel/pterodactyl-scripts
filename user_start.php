<?php
    $API_KEY_SERVER = 'server_api_key';
    $API_KEY_USER = 'user_api_key';
    $BASE_URI = 'url';
    $SERVER_ID = 1;
    $SERVER_UUID = 'uuid';
    $SERVER_IDENTIFIER = 'identifier';
    $ACTION = 'start'; // 'start', 'stop', 'restart', 'kill'

    require __DIR__.'/vendor/autoload.php';
    $pterodactyl_server = new \HCGCloud\Pterodactyl\Pterodactyl($API_KEY_SERVER, $BASE_URI);
    $pterodactyl_user = new \HCGCloud\Pterodactyl\Pterodactyl($API_KEY_USER, $BASE_URI);

//    $servers = $pterodactyl_server->servers();
//    print_r($servers);

//    $server = $pterodactyl_server->server($SERVER_ID);
//    print_r($server);

    $pterodactyl_user->powerServer($SERVER_IDENTIFIER, $ACTION);
?>