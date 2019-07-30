<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/7/30
 * Time: 5:33
 */
header("Content-type:text/html;charset=utf8");
include "./mqtt.php";
// 发送给订阅号信息,创建socket,无sam队列
$server = "127.0.0.1";     // 服务代理地址(mqtt服务端地址)
$port = 1883;                     // 通信端口
$username = "";                   // 用户名(如果需要)
$password = "";                   // 密码(如果需要
$client_id = "clientx9293670xxctr"; // 设置你的连接客户端id
$mqtt = new Mqtt($server, $port, $client_id); //实例化MQTT类
if ($mqtt->connect(true, NULL, $username, $password)) {
    //如果创建链接成功
    $mqtt->publish("xxx3809293670ctr", "setr=3xxxxxxxxx", 0);
    // 发送到 xxx3809293670ctr 的主题 一个信息 内容为 setr=3xxxxxxxxx Qos 为 0
    $mqtt->close();    //发送后关闭链接
} else {
    echo "Time out!\n";
}