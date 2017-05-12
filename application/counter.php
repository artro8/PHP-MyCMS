<?php 

$ip = $_SERVER['REMOTE_ADDR'];
$data = date('Y-m-d');
if(isset($ip)) {
    $CMS->Counter->counterVisitor($data);
    $updateIp = $CMS->Counter->insertIp($ip);
    if(!isset($_COOKIE["realValue"])) {
        $CMS->Counter->counterVisitorReal($data);
    }
}


setcookie("realValue", "John Doe", time() +  60*60, "/");




