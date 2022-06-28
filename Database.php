<?php

  $conn = new mysqli('localhost', 'root', '', 'data_table');

  if($conn->connect_error){
    die('connection faild '.$conn->connect_error);
  }
?>