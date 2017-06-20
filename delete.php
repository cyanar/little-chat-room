<?php
 require_once('dbconnect.php');
 db_connect();
 $sql="DELETE FROM chat";
 $result = mysql_query($sql);
 ?>