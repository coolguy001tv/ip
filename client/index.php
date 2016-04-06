<?php
/**
 * Created by PhpStorm.
 * User: CoolGuy
 * Date: 2016/4/6
 * Time: 21:09
 */
date_default_timezone_set('Asia/Chongqing');
ignore_user_abort(true);//关掉浏览器，PHP脚本也可以继续执行.
set_time_limit(0);//让程序无限制的执行下去
$interval = 600;//每分钟执行一次
echo("Please leave this cmd open, the program will get ip about every $interval seconds\n");
require("IpGet.php");
//class Tmp{
//    public function __construct()
//    {
//        file_put_contents("text.txt",date()."\n",FILE_APPEND);
//    }
//}
$ipGet = new IpGet();
do{
    $result = $ipGet->getAndSaveIp();
    //$result = new Tmp();
    if(0===$result){
        echo "success at " . date("Y-m-d H:i:s") . " & ip=".$ipGet->getMyIp();//."\n";
    }else{
        echo "fail!!!result=".$result .' at '. date("Y-m-d H:i:s") . "\n";
    }
    sleep($interval);
}while(true);

