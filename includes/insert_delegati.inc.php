<?php
  include '../dbh.php';
  session_start();

  $id_delegat = $_POST['id_delegat'];
  $nume = $_POST['nume_delegat'];
  $serie = $_POST['serie_buletin'];
  $nr = $_POST['nr_buletin'];
  $elib = $_POST['eliberat_de'];
  $cnp = $_POST['cnp'];
  $mij = $_POST['nr_mij_transp'];

  $sql_delegat = "INSERT INTO lista_delegati (id_delegat, nume_delegat, serie_buletin, nr_buletin, eliberat_de, cnp, nr_mijloc_transport)
                  VALUES ('$id_delegat', '$nume', '$serie', '$nr', '$elib', '$cnp', '$mij')";
  $result_delegat = mysqli_query($conn, $sql_delegat);

   header("Location: ../insert_delegati.php");

   
 ?>
