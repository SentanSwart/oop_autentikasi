<?php 

include_once('auth.php');

if(isset($_POST['login'])) {
    $data = [
    "email" => $_POST['email'],
    "password" => $_POST['password'],
    ];

    $login = Auth::login($data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="font-family:'Fira Code';">
<?php if(isset($hasil)) : ?>
    <div class="alert alert-<?php $hasil["status"] === 'error' ? print("danger") : print("success")?>">
    <?= $hasil["pesan"]?> </div>
    <?php endif ?>
    <div class="container d-flex justify-content-center min-vh-100 align-items-center">
        <div class="card" style="width: 450px;">
            <form action="" method="POST">
                <span class="h4 m-auto mt-5 d-flex justify-content-center align-items-center">LOGIN FORM</span>

            <div class="card-body mb-3">
                <div class="mt-2">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="mt-2">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <div class="d-grid gap-2">
                <button class="btn btn-primary mt-3" type="submit" name="login">SUBMIT</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>