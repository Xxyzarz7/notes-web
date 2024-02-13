<?php
// cara pertama
require_once("databases.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $note_id = $_GET['id'];

    $delete_query = "DELETE FROM notes WHERE id = $note_id";
    mysqli_query($konek, $delete_query);

    header("Location: list_notes.php");
} else {
    echo "gagal";
}

// cara kedua
// require_once("database.php");
// $id = $_GET[id];
// $sql = delete("notes", $id);
// if($sql){
//     header("Location: list_notes.php");
// }
?>
