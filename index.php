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
                <form class="form-group border p-4 shadow  border border-danger" action="db.php" method="POST">
                    <h3 class="text-center mb-4">Login</h3>

                    <div class="mb-3 row">
                        <label >Email</label>
                        <div class="col-8">
                            <input type="email" name="email" class="form-control" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label >Password</label>
                        <div class="col-8">
                            <input type="password" name="pass" class="form-control" >
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary " name="login">Sign In</button>
                    </div>
                    
                    <div class="mb-3 row">
                        <p>if you dont have accoount then <a href="signup.php">signup</a></p>
                    </div>
                      <p class="text-danger"> <?php if(!empty ($msg)) echo $msg ; ?></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
