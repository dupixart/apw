<?php
$key="YOURAPIKEYHERE";
// API Usage: /smthindex.php?key=KEY&link=https://example.org
if(isset($_GET['key']) and isset($_GET['link']) and $_GET['key'] == $key){
    header("Content-Type: application/json");
    if(file_get_contents('keys/'.bin2hex($_GET['link']))== false){
        $lnkid=bin2hex(random_bytes(rand(2,5)));
        while(file_exists($lnkid)){
            $lnkid=bin2hex(random_bytes(rand(2,5)));
        }
        file_put_contents("links/".$lnkid,$_GET['link']);
        file_put_contents('keys/'.bin2hex($_GET['link']),$lnkid);
        die('{"success":1,"lnk":'.json_encode($lnkid,JSON_UNESCAPED_UNICODE).'}');
    }
    die('{"success":1,"lnk":'.json_encode(file_get_contents('keys/'.bin2hex($_GET['link'])),JSON_UNESCAPED_UNICODE).'}');
}else{
    header("Content-Type: application/json");
    die('{"success":0}');
}
