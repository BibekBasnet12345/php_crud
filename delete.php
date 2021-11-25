<?php
include 'conn.php';
$ID =$_GET['ID'];
$q="DELETE FROM `crud` WHERE ID=$ID";

mysqli_query($con,$q);
header('location:display.php');
?>