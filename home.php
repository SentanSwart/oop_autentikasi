<?php
    session_start();

    if($_SESSION["email"] === null){
        header("Location: login.php"); 
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?echo "Selamat Datang" . $_SESSION["email"]; ?>
    <a class="btn btn-primary" href="logout.php">Logout</a>
  
</body>
</html>

