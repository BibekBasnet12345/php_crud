<!-- <?php
include 'conn.php';
    $username=$_POST['username']; 
    $password=$_POST['password'];
$q = "select * from crudbibek ";

$query =mysqli_query($con,$q);  
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<div class="col-lg-12"><br><br>
    <h1 class="text-warning text-center">Display Table Data</h1><br>
    <table class="table table-stripped table-hover table-bordered">
     <tr class="bg-dark text-white text-center">
         <th>ID</th>
         <th>username</th>
         <th>password</th>
         <th>Delete</th>
         <th>Update</th>
     </tr>   
     <?php
        include 'conn.php';
        $q ="select * from crudbibek ";
        $query = mysqli_query($con,$q);  
        while($res = mysqli_fetch_assoc($query)) {
    ?>
    <tr class="text-center" >
         <td><?php echo $res['ID']; ?></td>
         <td><?php echo $res['username']; ?></td>
         <td><?php echo $res['password']; ?></td>
         <td> <button class="btn-danger btn"> <a href="delete.php?ID=<?php echo $res['ID']; ?>" class="text-white">Delete❌</a></button> </td>
         <td> <button class="btn-primary btn"> <a href="update.php?ID=<?php echo $res['ID']; ?>"class="text-white">Update</a></button> </td>
         </tr>
<?php

    }
?>
  
    </table>
</div>

    </div>
</body>
</html>