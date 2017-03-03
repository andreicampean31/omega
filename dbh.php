<?php

  $conn = mysqli_connect('localhost', 'root', '', 'omegagroup');

  if(!$conn){
    die("Connection failed: " . mysqli_connect_error);
  }
