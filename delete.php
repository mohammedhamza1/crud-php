<?php
include 'db.php';

$id = $_GET['id'];
$sql = "delete from tasks where id = '$id'";
$deleteTask = $db->query($sql);

if($deleteTask){
    header('location: index.php');
}

?>