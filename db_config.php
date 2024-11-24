<?php

$hostname = "localhost";
$username= "root";
$password="";
$database_name="unione";

$db= mysqli_connect("localhost","root","","unione");
 
if($db -> connect_error){
    die("koneksi gagal : ".mysqli_connect_error());
}

?>