<?php
  $conn = mysqli_connect('localhost','root','','Online-Leave-Application');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
?>