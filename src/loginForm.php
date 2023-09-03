<?php

$message = null;

if(isset($_GET["status"])){
    
    $status = $_GET["status"];
    $pwd = isset($_GET["pwd"]) ? $_GET["pwd"]:'';
    
    if($status == 0){
        $message = "<h6 class='text-danger'>Required values were not submitted.</h6>";
    }elseif($status == 1){
        $message = "<h6 class='text-danger'>Please provide your username and password to proceed. Both fields are required for access.</h6>";        
    }elseif($status == 2){
        $message = "<h6 class='text-danger'>The entered username and password are incorrect. Please try again.</h6>"; 
    }elseif($status == 3){
        $message = "<h6 class='text-success'>Password has been reset. New password is: <b>".$pwd."</b></h6>";        
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--stylesheet-->
    <link href="../css/login.css" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <form action="login.php" method="POST">
            <h4 class="text-center">Login</h4>
            
            <?= $message ?>
            
            <div class="form-group mb-3 mt-5">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <div class="input-group-append">
                        <button class="btn eye-btn" type="button" id="toggleVisibility">
                            <i class="fa-solid fa-eye-slash" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>
                <small id="emailHelp" class="form-text text-muted mt-3 centered-text">Forgot password? <a href="reset-password.php" style="color:#146C94;text-decoration: none;"><b>Click here</b></a></small>

            </div>
            <button type="submit" class="btn btn-primary mt-4">Login </button>
        </form>
    </div>



   <script src="../js/login.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>