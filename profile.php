<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container mt-5">
    <div class="text-center p-5 border shadow rounded">
      <h1 class="mb-4">Welcome to the Dashboard!</h1>
      <p class="lead">You have successfully logged in.</p>
      <?php
      $uid=$_SESSION['uid'];
$sql="select * from userdetails where uid='$uid'";
    $exc=mysqli_query($con,$sql);
    $ref=mysqli_num_rows($exc);
  
        $row=mysqli_fetch_assoc($exc);
        $n=$row['name'];
        echo "Name: $n";
        echo "<br>";
        $e=$row['email'];
        echo "Email: $e";
         echo "<br>";
        $m=$row['mobile'];
        echo "Mobile: $m";
         echo "<br>";
        $p=$row['password'];
        echo "Password: $p";
         echo "<br>";
?>


      <div class="mt-4">
         
        <a href="db.php?edit" class="btn btn-primary mx-2">Edit Details</a>
       
        <a href="db.php?deleteacc" class="btn btn-primary mx-2">Delete Account</a>
   
        <a href="db.php?logout" class="btn btn-primary  mx-2">Logout</a>
      </div>
    </div>
  </div>
</body>

</html>