<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/17
 * Time: 22:58
 */

if (!extension_loaded('swoole')) {
    throw new \Exception('Swoole Extension Unloaded !');
}

try {
    // 实例化 websocket 客户端
    $client = new \Listen\Swoole\Client\WebSocket($host, $port);

    // 连接服务器
    $result = $client->connect();

    // 发送消息
    $client->send("Hello Word \n");

    // 输出服务消息
    echo $client->recv() . "\n";

} catch (\Listen\Swoole\Exceptions\WebSocketException $e) {

    echo $e->getMessage();
}
