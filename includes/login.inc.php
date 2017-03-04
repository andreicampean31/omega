<?php
  include '../dbh.php';
  session_start();

  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  $sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
  $result_login = mysqli_query($conn, $sql);

  if(!$row = mysqli_fetch_assoc($result_login)){
    echo "your uid or password were incorect";
  }
  else{
    $_SESSION['uid'] = $row['uid'];
  }

  header("Location: ../index.php");
