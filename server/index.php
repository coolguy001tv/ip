<?php
/**
 * Created by PhpStorm.
 * User: CoolGuy
 * Date: 2016/4/6
 * Time: 11:57
 */
include_once ("Ip.php");
date_default_timezone_set('Asia/Chongqing');
$ip = new Ip();
if(isset($_GET['history'])){
    echo str_replace("\n","<br/>",$ip->getHistoryIp());
}else{
    echo str_replace("\n","<br/>",$ip->getLatestIp());
}


