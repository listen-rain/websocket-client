<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/17
 * Time: 22:58
 */

namespace Listen\Swoole\Tests;

require __DIR__ . '/../vendor/autoload.php';

if (!extension_loaded('swoole')) {
    throw new \Exception('Swoole Extension Unloaded !');
}

try {
    // 实例化 websocket 客户端
    $client = new \Listen\Swoole\Client\WebSocket('127.0.0.1', 9588);

    if ($client->connect()) {
        // 发送消息
        $client->send("Hello Word \n");

        // 输出服务消息
        echo "Message: " . $client->recv() . "\n";
    }

} catch (\Listen\Swoole\Exceptions\WebSocketException $e) {

    echo $e->getMessage();
}
