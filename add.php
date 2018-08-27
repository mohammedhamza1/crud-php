<?php
include 'db.php';

if(isset($_POST['send'])){
    $name = $_POST['task'];
    $sql = "insert into tasks (name) values ('$name')";
    $addNew = $db->query($sql);
    if($addNew){
        echo "<div class='alert alert-success'>Task added successfully</div>";
        header('location: index.php');
    }
}

?>

