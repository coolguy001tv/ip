<?php
require("IpGet.php");
$ipGet = new IpGet();
$result = $ipGet->getAndSaveIp();
if(0===$result){
    echo "success";
}else{
    echo "fail,result=".$result;
}

?>
