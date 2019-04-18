<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/18
 * Time: 10:05
 */

namespace Listen\Swoole;

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
        //
    }

    /**
     * @date   2019/4/18
     * @author <zhufengwei@aliyun.com>
     */
    public function register()
    {
        $this->app->bind(\Listen\Swoole\Facades\WebSocketClient::class, function () {
            return new WebSocket(config('websocket.host', '127.0.0.1'), config('websocket.port', 9501));
        });
    }
}
