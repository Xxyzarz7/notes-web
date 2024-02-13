<?php
require_once("databases.php");
$id=$_POST['id'];
$xnotes = $_POST['notes'];

$sql2=update("notes",$xnotes,$id);
if ($sql2){
    header('location:list_notes.php');
}
?>