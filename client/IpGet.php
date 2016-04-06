<?php

/**
 * $ curl ifconfig.me
$ curl icanhazip.com
$ curl ident.me
$ curl ipecho.net/plain
$ curl whatismyip.akamai.com
$ curl tnx.nl/ip
$ curl myip.dnsomatic.com
$ curl ip.appspot.com
 * 参考http://www.cnblogs.com/nhlinkin/p/3535214.html
 */

class IpGet{
    private $ip;
    private $ipServer = "http://icanhazip.com/";
    private $ipSaveServer = "http://www.coolguy.pw/pomelo/server/getIp.php";
    public function __construct(){

    }
    public function getIp(){
        if(($ch = curl_init())===false){
            echo "Please open curl mod.";
            return -1;
        }
        curl_setopt($ch,CURLOPT_URL,$this->ipServer);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $content = curl_exec($ch);//执行结果是一个IP地址
        $this->ip = $content;
        curl_close($ch);
        return 0;
    }
    public function saveIp(){
        if(($ch = curl_init())===false){
            echo "Please open curl mod.";
            return -1;
        }
        curl_setopt($ch,CURLOPT_URL,$this->ipSaveServer."?ip=".$this->ip);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        return 0;

    }
    public function getAndSaveIp(){
        if( 0 === $this->getIp()){
            if( 0 === $this->saveIp()){
                return 0;//成功
            };
            return -2;//
        }
        return -1;//失败
    }

}