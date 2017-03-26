<?php
  include '../dbh.php';
  session_start();

  $id_delegat = $_POST['id_delegat']; //idul delegatului
  $nume = $_POST['nume_delegat']; //numele delegatului
  $serie = $_POST['serie_buletin']; //seria de buletin
  $nr = $_POST['nr_buletin']; //numarul de buletin
  $elib = $_POST['eliberat_de']; //eliberat de ...
  $cnp = $_POST['cnp']; //cnp-ul
  $mij = $_POST['nr_mij_transp']; //numarul de inmatricualre

  if( empty($id_delegat) || empty($nume) || empty($serie) || empty($nr) || empty($elib) || empty($cnp) || empty($mij) ){ //verificare spatii libere
    header("Location: ../insert_delegati.php?error=empty"); //link eroare spatii libere
    exit();
  }
  else{ //daca nu sunt spatii libere se insereaza in DB
    $sql_delegat = "INSERT INTO lista_delegati (id_delegat, nume_delegat, serie_buletin, nr_buletin, eliberat_de, cnp, nr_mijloc_transport)
                    VALUES ('$id_delegat', '$nume', '$serie', '$nr', '$elib', '$cnp', '$mij')"; //inserare delegati 
    $result_delegat = mysqli_query($conn, $sql_delegat); //rezultatul inserarii
  }
  header("Location: ../insert_delegati.php");
