<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/7/30
 * Time: 5:34
 */
// 订阅信息,接收一个信息后退出
header("Content-type:text/html;charset=utf8");
include "./mqtt.php";
$server = "127.0.0.1";     // 服务代理地址(mqtt服务端地址)
$port = 1883;                     // 通信端口
$username = "";                   // 用户名(如果需要)
$password = "";                   // 密码(如果需要
$client_id = "clientx9293670xxctr"; // 设置你的连接客户端id

$mqtt = new Mqtt($server, $port, $client_id);

if(!$mqtt->connect(true, NULL, $username, $password)) { //链接不成功再重复执行监听连接
    exit(1);
}

$topics['SN69143809293670state'] = array("qos" => 0, "function" => "procmsg");
// 订阅主题为 SN69143809293670state qos为0
$mqtt->subscribe($topics, 0);

while($mqtt->proc()){

}
//死循环监听


$mqtt->close();

function procmsg($topic, $msg){ //信息回调函数 打印信息
        echo "Msg Recieved: " . date("r") . "\n";
        echo "Topic: {$topic}\n\n";
        echo "\t$msg\n\n";
        $xxx = json_decode($msg);
        var_dump($xxxxxx->aa);
        die;
}