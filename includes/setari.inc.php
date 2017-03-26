<?php
include '../dbh.php';
session_start();

$tva_setare = $_POST['TVA_cota']; //pt schinbarea valorii
$tva_setare_initial = $_POST['TVA_cota_initial']; //pt setarea initiala a valorii

if(isset($tva_setare)){ //pt schinbarea valorii
  $sql_tva = "UPDATE setari SET cota_tva = $tva_setare";
  $result_tva = mysqli_query($conn, $sql_tva);
}
else{ //pt setarea initiala a valorii
  $sql_tva = "INSERT INTO setari (cota_tva) VALUES ('$tva_setare_initial')";
  $result_tva = mysqli_query($conn, $sql_tva);
}


header("Location: ../setari.php");
