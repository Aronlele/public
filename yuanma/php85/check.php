<?php
include("../inc/mima.php");


if (!isset($_COOKIE['username'])) {
header("Location: ./login.php");
}
if($_COOKIE['username'] != USERNAME){
header("Location: ./login.php"); 		
}
if (!isset($_COOKIE['password'])) {
header("Location: ./login.php");
}
if($_COOKIE['password'] != PASSWORD){
header("Location: ./login.php"); 		
}
?>