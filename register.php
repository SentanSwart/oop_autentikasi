<?php 

include_once('auth.php');

if(isset($_POST['register'])) {
    $data = [
    "username" => $_POST['username'],
    "email" => $_POST['email'],
    "password" => $_POST['password'],
    "confirmPass" => $_POST['confirmPass'],
    ];

    $register = Auth::register($data);
    
    if($register["status"] === "sukses") {
        header("Location: login.php");
    } else {
        header('Location: register.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="font-family:'Fira Code';">
    <div class="container d-flex justify-content-center min-vh-100 align-items-center">
        <div class="card" style="width: 450px;">
            <form action="" method="POST">
                <span class="h4 m-auto mt-5 d-flex justify-content-center align-items-center">REGISTER FORM</span>
            <div class="card-body mb-3">

                <div class="mt-2">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                </div>

                <div class="mt-2">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="mt-2">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <div class="mt-2">
                <label for="confirmPass">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPass" id="confirmPass" placeholder="Repeat your password" required>
                </div>

                <div class="d-grid gap-2">
                <button class="btn btn-primary mt-3" type="submit" name="register">SUBMIT</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>