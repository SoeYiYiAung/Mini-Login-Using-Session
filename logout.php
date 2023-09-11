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
            <legend>Logout Page</legend>
        </div>

    </div>

</div>

<?php
session_start();
session_destroy();
echo "Logout success!";
?>

</body>
</html>