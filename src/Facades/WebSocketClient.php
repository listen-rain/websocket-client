<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/18
 * Time: 10:16
 */

namespace Listen\Swoole\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class WebSocketClient
 * @package Listen\Swoole\Facades
 * @see     \Listen\Swoole\Client\WebSocket::class
 */
class WebSocketClient extends Facade
{
    /**
     * @date   2019/4/18
     * @author <zhufengwei@aliyun.com>
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'listen.wsclient';
    }
}
