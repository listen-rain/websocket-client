<?php
/**
 * Created by PhpStorm.
 * User: <zhufengwei@aliyun.com>
 * Date: 2019/4/17
 * Time: 22:14
 */

namespace Listen\Swoole;


class WebSocketFrame
{
    public $finish = false;
    public $opcode;
    public $data;

    public $length;
    public $rsv1;
    public $rsv2;
    public $rsv3;
    public $mask;
}
