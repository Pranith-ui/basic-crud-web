<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

        $uid=$_SESSION['uid'];
         $sql="select * from userdetails where uid='$uid'";
         $exc=mysqli_query($con,$sql);
         $row=mysqli_fetch_assoc($exc);
        $n=$row['name'];
        $e=$row['email'];
        $m=$row['mobile'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto  bg-light">
                <form class="form-group border p-4 shadow  border border-danger" action="db.php?update" method="POST" autocomplete="off">
                    <h3 class="text-center mb-4">edit detail</h3>
                 
                    <div class="mb-3 row">
                        <label >Name</label>
                        <div class="col-8">
                            <input type="text" name="n" class="form-control" value="<?php echo $n ; ?>">
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label >Email</label>
                        <div class="col-8">
                            <input type="email" name="e" class="form-control" value="<?php echo $e ; ?>" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label >mobile no</label>
                        <div class="col-8">
                            <input type="tel" name="m" class="form-control" value="<?php echo $m ; ?>" >
                        </div>
                    </div>
                    

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary " name="update">update</button>
                    </div>
                    
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>

