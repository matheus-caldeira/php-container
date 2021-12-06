<?php
  $conn = mysqli_connect(
    'db',
    'docker',
    'docker',
    'docker'
  );
  
  if (!$conn) {
    die(mysqli_error());
  }
  
  echo "Connection Ok";
  $conn->close();
?>