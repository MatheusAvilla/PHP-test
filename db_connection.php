<?php
function OpenCon()
 {
 $dbhost = "172.16.127.16";
 $dbuser = "root";
 $dbpass = "root";
 $db = "ESTAGIO";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>