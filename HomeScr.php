<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Notes</title>
    <link class="icon" rel="icon" href="journal.png">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">NOTES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8080/WEB/Semester%202/pplg_1_notes/HomeScr.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8080/WEB/Semester%202/pplg_1_notes/list_notes.php">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">API</a>
                    </li>
                </ul>
                <form class="d-flex">
                <a href="logout.php"><button class="btn btn-outline-success" type="button">Logout</button></a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="container py-5" align="center">
        <h1 class="display-5 fw-bold">My Notes 2024</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cupiditate, odit amet quisquam consequuntur aspernatur hic veniam laudantium assumenda dolore dolorum ipsum, ducimus nemo, vel porro aut praesentium placeat natus!
        </p>
        <a href="http://localhost:8080/WEB/Semester%202/pplg_1_notes/formnotes.php"><button class="btn btn-dark btn-lg" type="button">Documentation</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:formlogin.php?msg=belum_login");
}
?>