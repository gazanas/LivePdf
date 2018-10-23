<?php
namespace App;

use Ratchet\Server\IoServer;
use App\Message;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require dirname(__DIR__).'/vendor/autoload.php';

  $settings = array();
  $fileCont = file_get_contents(dirname(__DIR__).'/settings.txt');

  preg_match_all('/.+ =\> .+/', $fileCont, $matches);

  foreach ($matches[0] as $index => $match) {
    $index++;
    $matchArray     = explode(' => ', $match);
    $settings[$index] = $matchArray[1];
  }

$server = IoServer::factory(
new HttpServer(
        new WsServer(
            new Message()
        )
    ),
    intval($settings[2])
);

$server->run();