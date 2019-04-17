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

$websocketServer = new  \Swoole\WebSocket\Server('0.0.0.0', '7788');
