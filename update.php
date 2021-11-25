<?php
include 'conn.php';

include 'conn.php';
if(isset($_POST['done'])){
    $ID=$_GET['ID'];
    $username=$_POST['username']; 
    $password=$_POST['password'];
     $q ="update  crud set ID=$ID ,username=$username,password=$passwprd where ID=$ID";

$query =mysqli_query($con,$q);  
header('location:display.php');
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="post">
           <br> <br>
<div class ="card">

<div class="card-header bg-dark">
    <h1 class="text-white text-center">update operation</h1>
</div>
<label >username:</label>
<input type="text" name="username" class="form-control"><br>
<label >password::</label>
<input type="text" name="password" class="form-control"><br>
<button class="btn btn-success" type="submit" name="done">submit</button><br>
</div>

        </form>
    </div>
</body>
</html>