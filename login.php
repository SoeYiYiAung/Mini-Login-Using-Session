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
            <legend>Login Page</legend>
            <form method="POST">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
            <label>Password</label>
            <input type="password" name="password" class="form-control"></br>
            <input type="submit" value="Login" name="Login" class="btn btn-dark font-white" >
        </form>
        </div>

    </div>

</div>

<?php
if(isset($_POST['Login'])){
    session_start();
//echo $_SESSION['email'] ."</br>";
//echo $_SESSION['password'];
    $email=$_POST['email'];
    $password=$_POST['password'];//123

    $userEmail=$_SESSION['email'];
    $userPassword=$_SESSION['password'];//hashValue

    if($email==$userEmail && password_verify($password,$userPassword))
    {
        echo "Login Success!";
        
    }
    else{
        echo "Fail! Try again!";
    }
}


?>

</body>
</html>