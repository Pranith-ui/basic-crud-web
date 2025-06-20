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
                    <h3 class="text-center mb-4">Sign up</h3>
             
                    <div class="mb-3 row">
                        <label >Name</label>
                        <div class="col-8">
                            <input type="text" name="n" class="form-control" required>
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label >Email</label>
                        <div class="col-8">
                            <input type="email" name="e" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label >mobile no</label>
                        <div class="col-8">
                            <input type="tel" name="m" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label >Password</label>
                        <div class="col-8">
                            <input type="password" name="p" class="form-control" required>
                        </div>
                    </div>
                    

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary " name="signup">Sign up</button>
                    </div>
                    
                    <div class="mb-3 row">
                        <p>if you already have accoount then <a href="index.php">signin</a></p>
                    </div>
                       <p class="text-danger"> <?php if(!empty ($msg)) echo $msg ; ?></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
