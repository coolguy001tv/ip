<?php

/**
 * Created by PhpStorm.
 * User: CoolGuy
 * Date: 2016/4/6
 * Time: 11:57
 */
date_default_timezone_set('Asia/Chongqing');
class Ip{
    private $ip;
    private $savePath = 'ip.txt';
    private $historyPath = "history.txt";
//    public function __construct(){
//    }

    public function __construct($ip=null){
        if(isset($ip)){
            $this->ip = $ip;
        }
    }
    public function saveIP(){
        $ip = $this->ip;
        $content = date("Y-m-d H:i:s")." ".$ip."\n";
        if(false === file_put_contents($this->savePath,$content)){
            return -1;//写文件失败
        }
        //添加到历史文件
        if(false === file_put_contents($this->historyPath,$content,FILE_APPEND)){
            return -2;//写历史文件失败
        }
    }
    public function getLatestIp(){
        return file_get_contents($this->savePath);
    }
    public function getHistoryIp(){
        return file_get_contents($this->historyPath);
    }
}