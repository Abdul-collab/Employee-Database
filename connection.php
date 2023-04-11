<?php 
session_start();
error_reporting(1);

if(!mysql_connect("localhost","root","","empdb"))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("empdb");
 
//  echo"connected";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbconn = "empdb";
// $conn = mysqli_connect($servername,$username,$password,$dbconn);
// if(!$conn){
//     die("Connection failed for local server". mysqli_connect_error());
// }
//     //  echo "local server has connected successfully";
// ?>

