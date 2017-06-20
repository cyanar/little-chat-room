<?php

     require_once('dbconnect.php');
     db_connect();

     $sql = "SELECT * FROM chat ORDER BY ID DESC";
     $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
     $array = array("result"=>array());

     while($row = mysql_fetch_array($result)){
         array_push($array["result"],json_encode($row));
     }
     echo json_encode($array);
?>





