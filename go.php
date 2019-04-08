<?php
    include_once "credentials.php";
    if(isset($_GET['l']) and isset($_GET['lt'])){
        require 'vendor/autoload.php';
        $result = new WhichBrowser\Parser($_SERVER['HTTP_USER_AGENT']);
        $useragent = $result->toString();
        $ip = $_SERVER["REMOTE_ADDR"];
        $l = $_GET['l'];
        $lt = $_GET['lt'];

        date_default_timezone_set("Asia/Kolkata");
        $datet = date('d-m-Y H:i:s');

        $sql = "INSERT INTO gpstrack(ip, datet, ua, lat, lng) VALUES('$ip', '$datet', '$useragent', '$lt', '$l')";
        mysqli_query($conn, $sql);
    }
?>