<?php
  include '../dbh.php';
  session_start();
  //interogare date de bagat in tabelul de comanda
  $c_id = $_GET['id'];
  $sql_comanda = "SELECT * FROM oferte WHERE id='$c_id'";
  $result_comanda = mysqli_query($conn, $sql_comanda);

  while($row_comanda = mysqli_fetch_array($result_comanda)){
    $c_denumire_produs = $row_comanda['denumire_produs'];
    $c_pretRON = $row_comanda['pretRON'];
    $c_U_M = $row_comanda['U_M'];
    $c_cantitate = $row_comanda['cantitate'];
    $c_firma = $row_comanda['firma'];
    $c_delegat = $row_comanda['delegat'];
    $c_mentiuni1 = $row_comanda['mentiuni1'];
    $c_mentiuni2 = $row_comanda['mentiuni2'];
    $c_cota_tva = $row_comanda['cota_tva'];
    $c_valoare = $row_comanda['valoare'];
    $c_tva = $row_comanda['tva'];
    $c_facturatRON = $row_comanda['facturatRON'];
    $c_termen_plata = $row_comanda['termen_plata'];
    $c_persoana_contact = $row_comanda['persoana_contact'];
    $c_pret_ofertat = $row_comanda['pret_ofertat'];
    $c_reducere = $row_comanda['reducere'];
  }
  //test
  echo $c_denumire_produs;echo $c_pretRON;echo $c_U_M;echo $c_cantitate;echo $c_firma;echo $c_delegat;echo $c_mentiuni1;
  echo $c_mentiuni2;echo $c_cota_tva;echo $c_valoare;echo $c_tva;echo $c_facturatRON;echo $c_termen_plata;echo $c_persoana_contact;
  echo $c_pret_ofertat;echo $c_reducere;

  $nr_comanda = $_POST['nr_comanda'];
  $termen_livrare = $_POST['termen_livrare'];
  //test
  echo $nr_comanda;echo $termen_livrare;

  //inserare noile date in tabelul comanda
  $sql_comanda_insert = "INSERT INTO comanda (denumire_produs, pretRON, U_M, cantitate, firma, delegat, mentiuni1, mentiuni2, cota_tva, valoare, tva, facturatRON, termen_plata, persoana_contact, pret_ofertat, reducere, nr_comanda, termen_livrare)
                          VALUES ('$c_denumire_produs', '$c_pretRON', '$c_U_M', '$c_cantitate', '$c_firma', '$c_delegat', '$c_mentiuni1', '$c_mentiuni2', '$c_cota_tva', '$c_valoare', '$c_tva', '$c_facturatRON', '$c_termen_plata', '$c_persoana_contact', '$c_pret_ofertat', '$c_reducere', '$nr_comanda', '$termen_livrare')";
  $result_comanda_insert = mysqli_query($conn, $sql_comanda_insert);

  //stergerea din tabelul oferte
  $sql_delete = "DELETE FROM oferte WHERE id='$c_id'";
  $result_delete = mysqli_query($conn, $sql_delete);
  header("Location: ../ofertare.php");

 ?>
