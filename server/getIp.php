<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/6
 * Time: 12:08
 */
include_once ("Ip.php");
header("Access-Control-Allow-Origin:*"); //允许任何访问(包括ajax跨域)
if($getIp = $_GET['ip']){
    $ip = new Ip($getIp);
    $ip->saveIP();
}