<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/17
 * Time: 22:52
 */

if (!extension_loaded('swoole')) {
    throw new \Exception('Swoole Extension Unloaded !');
}

$ws = new  \Swoole\WebSocket\Server('0.0.0.0', '9599');

$ws->on('open', function ($ws, $request) {
    var_dump($request->fd, $request->get, $request->server);
    $ws->push($request->fd, "hello, welcome\n");
});

$ws->on('message', function ($ws, $frame) {
    echo "Message: {$frame->data}\n";
    $ws->push($frame->fd, "server: {$frame->data}");
});

$ws->on('close', function ($ws, $fd) {
    echo "client-{$fd} is closed\n";
});

$ws->start();
