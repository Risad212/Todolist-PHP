<?php
   include 'Database.php';

   $todoItem = $_POST['todoItem'];
   
   if($todoItem){
     $sql = "INSERT INTO todo_storge(item) VALUES('$todoItem')";
     $result = mysqli_query($conn, $sql);

     if($result){
        header('location: index.php');
     }
   }
?>