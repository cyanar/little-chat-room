<?php
function db_connect()
{
  date_default_timezone_set("Asia/Calcutta");

  $link = @mysql_connect("localhost", "root", "")
            or die('Could not connect: ' . mysql_error());
  mysql_query("set names utf8");
  mysql_select_db("chat");
}
?>
