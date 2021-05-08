<?php
//session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
die("Database Not Connected");
$db=mysql_select_db("efabric",$con);
if(!$db)
die("No Database Found");
?>