<?php
  include '../dbh.php';

  $reducere_update = $_POST['reducere_update'];
  $id_update = $_GET['id'];

  //interogare pt variabilele care trebuie refolosite
  $sql_reinterogare = "SELECT pret_ofertat, cantitate, cota_tva FROM oferte WHERE id=$id_update ";
  $result_reinterogare = mysqli_query($conn, $sql_reinterogare);
  //salvarea noilor date
  if($row_reinterogare = mysqli_fetch_assoc($result_reinterogare)){
    $pret_ofertat_up = $row_reinterogare['pret_ofertat'];
    $cantitate_up = $row_reinterogare['cantitate'];
    $cota_tva_up = $row_reinterogare['cota_tva'];
  }
  //variabile recalculate
  $pret_ron_up = $pret_ofertat_up*(1+$reducere_update);
  $valoare_up = $pret_ron_up*$cantitate_up;
  $TVA_up = ROUND(($valoare_up*($cota_tva_up)/100), 0);
  $facturat_ron_up = $valoare_up+$TVA_up;
   /*echo $pret_ron_up. "<br>";
   echo $valoare_up. "<br>";
   echo $TVA_up. "<br>";
   echo $facturat_ron_up. "<br>";*/
  //update
  $sql_reducere = "UPDATE oferte SET pretRON=$pret_ron_up, valoare=$valoare_up, tva=$TVA_up, facturatRON=$facturat_ron_up, reducere=$reducere_update WHERE id=$id_update";
  $result_reducere = mysqli_query($conn, $sql_reducere);

  header("Location: ../ofertare.php");
 ?>
