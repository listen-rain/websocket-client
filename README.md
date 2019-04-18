# websocket-client

[![Latest Stable Version](https://poser.pugx.org/listen/websocket-client/v/stable)](https://packagist.org/packages/listen/websocket-client)
[![Total Downloads](https://poser.pugx.org/listen/websocket-client/downloads)](https://packagist.org/packages/listen/websocket-client)
[![Latest Unstable Version](https://poser.pugx.org/listen/websocket-client/v/unstable)](https://packagist.org/packages/listen/websocket-client)
[![License](https://poser.pugx.org/listen/websocket-client/license)](https://packagist.org/packages/listen/websocket-client)
[![Monthly Downloads](https://poser.pugx.org/listen/websocket-client/d/monthly)](https://packagist.org/packages/listen/websocket-client)
[![Daily Downloads](https://poser.pugx.org/listen/websocket-client/d/daily)](https://packagist.org/packages/listen/websocket-client)
[![composer.lock](https://poser.pugx.org/listen/websocket-client/composerlock)](https://packagist.org/packages/listen/websocket-client)

[fork from](https://github.com/matyhtf/framework) 

websocket-client 是一个支持 PHP 服务端连接 websocket 服务器的扩展，方便服务端给连接了 websocket 客户端发送实时消息，参考：[matyhtf/framework](https://github.com/matyhtf/framework)
的 Swoole 框架

## 安装

```bash
composer install  listen/websocket-client
```

## 使用

#### laravel | lumen

配置 Provider
```
'providers' => [
    Listen\Swoole\Providers\WebsocketProvider::class,
]
```

配置 Alias
```
'aliases' => [
    'WebSocketClient' => Listen\Swoole\Facades\WebSocketClient::class,
]
```

配置主机和端口 .env
```
WEBSOCKET_HOST=<host>
WEBSOCKET_PORT=<port>
```

使用

```php
try {
    \WebSocketClient::connect();
    
    \WebSocketClient::send("hello hahaha\n");
    
    echo \WebSocketClient::recv() . "hahaha\n";
    
} catch (\Listen\Swoole\Exceptions\WebSocketException $e) {
    dd($e->getMessage());
}
```

#### 其它

```php
try {
    // 实例化 websocket 客户端
    $client = new WebSocket($host, $port);
   
    // 连接服务器
    $result = $client->connect();
   
    // 发送消息
    $client->send("Hello Word \n");
    
    // 输出服务消息
    echo $client->recv() . "\n";
    
} catch (WebSocketException $e) {

    echo $e->getMessage();
}
```

## 

现能够满足PHP充当客户端发送websocket消息到websocket服务端的基本需求，欢迎有时间的小伙伴贡献代码，持续迭代
