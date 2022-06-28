<?php
include 'Database.php';
$id=$_POST['id'];
$item=$_POST['todoItem'];


$sql="UPDATE todo_storge SET item='$item' WHERE id=$id";
$result=mysqli_query($conn, $sql);

if($result){
 header("location: ./index.php");
}

?>