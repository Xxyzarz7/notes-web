<?php 
require_once("databases.php");

$xnotes = $_POST['notes'];
$simpan=inputdata("INSERT INTO notes VALUES (null,'$xnotes',now())");
if ($simpan){
    header('location:list_notes.php');
}
?>