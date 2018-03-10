<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午10:15
 */

namespace beili;

use beili\message\LinkMessage;
use beili\message\TextMessage;
use Couchbase\Exception;

class DDRobot
{
    private $webHook = '';

    public function __construct($webHook)
    {
        if (empty($webHook)) {
            throwException(new Exception("机器人钩子地址不能为空"));
        }
        $this->webHook = $webHook;
    }

    public function sendToDD($postMessage)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->webHook);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=utf-8'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postMessage);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // 线下环境不用开启curl证书验证, 未调通情况可尝试添加该代码
        // curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data);
    }
}
