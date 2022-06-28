<?php
 include 'Database.php';
 $id = $_GET['id'];

 $sql = "DELETE FROM todo_storge WHERE id=$id";
 $result = mysqli_query($conn,$sql);

 if($result){
    header('location: index.php');
 }
?>