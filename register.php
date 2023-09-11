<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4" >
    <div class="card">
        <div class="card-header">
            <a href="login.php"><button class="btn btn-primary mr-3">Login</button></a>
            <a href="register.php"><button class="btn btn-success mr-3">Register</button></a>
            <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
        </div>
        <div class="card-body">
            <legend>Register Page</legend>
            <form method="POST">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="confirmPW" class="form-control">
                </br>
                <input type="submit" name="Register" class="btn btn-dark font-white">
                

            </form>
        </div>
    </div>

</div>


<?php
    session_start();

    if(isset($_POST['Register']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmPW=$_POST['confirmPW'];
        
        if($password == $confirmPW)
        {
            $hashPassword= password_hash($password,PASSWORD_BCRYPT);
            //echo $hashPassword;
            $_SESSION['email']=$email;
            $_SESSION['password']=$hashPassword;

            echo "Register Success!";
        }
        else{
         echo "Password do not match!";
        }
    }
?>
</body>
</html>

