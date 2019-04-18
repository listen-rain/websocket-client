<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/18
 * Time: 10:05
 */

namespace Listen\Swoole\Providers;

use Illuminate\Support\ServiceProvider;
use Listen\Swoole\Client\WebSocket;

class WebsocketProvider extends ServiceProvider
{
    /**
     * @date   2019/4/18
     * @author <zhufengwei@aliyun.com>
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/websocket_client.php' => base_path('config/websocket_client.php'),
        ], 'swoole-websocket');
    }

    /**
     * @date   2019/4/18
     * @author <zhufengwei@aliyun.com>
     */
    public function register()
    {
        $this->app->bind(\Listen\Swoole\Facades\WebSocketClient::class, function () {
            return new WebSocket(
                config('websocket_client.host', '127.0.0.1'),
                config('websocket_client.port', 9501)
            );
        });

        $this->app->alias(\Listen\Swoole\Facades\WebSocketClient::class, 'listen.wsclient');

        $this->mergeConfigFrom(__DIR__ . '/../../config/websocket_client.php', 'websocket_client');
    }
}
