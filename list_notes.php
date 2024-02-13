<?php
require_once("databases.php");
$tampil = kuery("SELECT * FROM notes");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Notes</title>
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

    <br>

    <!-- Data Content -->
    <div class="container">
        <h1>My Notes</h1>
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                foreach ($tampil as $data) :
                ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?></th>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['note']; ?></td>
                        <td><?php echo $data['created_at']; ?></td>
                        <td>
                            <a href="edit_notes.php?id=<?php echo $data['id']; ?>">Edit</a> |
                            <!-- cara pertama -->
                            <a href="delete_note.php?id=<?php echo $data['id']; ?>">HapusData</a>
                            <!-- cara kedua -->
                            <!-- <a href="javascript:hapusdata('.$note[id].')">hapusdata</a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

