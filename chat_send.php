<?php
     require_once('dbconnect.php');
     db_connect();

     $msg = $_GET["msg"];
     $dt = date("H:i:s");
     $user = $_GET["name"];

     $sql="INSERT INTO chat (USERNAME,CHATDATE,MSG) values ('{$user}','{$dt}','{$msg}');";
     $result = mysql_query($sql);
     if(!$result)
     {
        exit;
     }
     echo "1";
?>





