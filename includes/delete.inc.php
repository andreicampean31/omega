<?php
  include '../dbh.php';
  session_start();

  //verificare care request de delete a fost cerut
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if(strpos($url, "?firma") != false){ //daca esti pe pagina cu firme
    if(isset($_GET['firmaid'])){//daca exista un id luat...doar o verificare in plus
      $id = $_GET['firmaid'];
      $sql_delete = "DELETE FROM lista_firme WHERE id='$id'";
      $result_delete = mysqli_query($conn, $sql_delete);
      header("Location: ../insert_firme.php");
    }
  }
  elseif(strpos($url, "?delegat") != false){ //daca esti pe pagina cu delegati
    if(isset($_GET['delegatid'])){//daca exista un id luat...doar o verificare in plus
      $id = $_GET['delegatid'];
      $sql_delete = "DELETE FROM lista_delegati WHERE id='$id'";
      $result_delete = mysqli_query($conn, $sql_delete);
      header("Location: ../insert_delegati.php");
    }
  }
