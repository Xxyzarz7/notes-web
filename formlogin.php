<?php
require_once('databases.php');
session_start();

if(isset($_POST['masuk'])) {
    if(cek_login($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:HomeScr.php");
    } else{
        header("location:fromlogin.php?msg=gagal");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link class="icon" rel="icon" href="journal.png">
</head>
<body>

<br><br><br><br><br>

<form action="" method="post">
    <div class="kotak">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h1 class="h1">NOTES <span class="sp">LOGIN</span></h1>
                </li>
                <li class="list-group-item">
                    <div class="mb-3">
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="masuk" value="login">Login</button>
                </li>
            </ul>
        </div>
    </div>
</form>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>