<?php
  include '../dbh.php';
  session_start();

  $firma = $_POST['firma'];
  echo $firma;

  /*$sql_tva = "SELECT cota_tva FROM setari"; //cauta valuarea actuala tva in DB
  $result_tva = mysqli_query($conn, $sql_tva);

  if($row = mysqli_fetch_assoc($result_tva)){
    $cota_tva = $row['cota_tva'];
  }

  //variabile de introdus

    $cod_produs = $_POST['cod_produs']; //codul produsului
    $nr_aviz = $_POST['nr_aviz']; //numarul de aviz
    $denumire_produs = $_POST['denumire_produs']; //denumirea produsului
    $ART = $_POST['ART']; //neobligatoriu
    $comentariu = $_POST['comentariu']; //neobligatoriu
    $cantitate = $_POST['cantitate']; //cantitatea
    $mentiuni1 = $_POST['mentiuni1']; //neobligatoriu
    $mentiuni2 = $_POST['mentiuni2']; //neobligatoriu
    $nr_factura = $_POST['nr_factura']; //numarul de factura
    $termen_plata = $_POST['termen_plata']; //termenul de plata
    $pret_ofertat = $_POST['pret_ofertat']; //pretul ofertat
    $reducere_acordata = $_POST['reducere_acordata']; //reducerea acordata

  //variabile calcualte

    $pret_ron = $pret_ofertat*(1+$reducere_acordata); // pretul final
    $valoare = $pret_ron*$cantitate; //valoarea comenzii
    $TVA = $valoare*($cota_tva)/100;
    $facturat_ron = $valoare+$TVA; //facturat +TVA;

    echo $pret_ron. "<br>";
    echo $valoare. "<br>";
    echo $TVA. "<br>";
    echo $facturat_ron. "<br>";

  //firma si delegat

    $firma_id = $_POST['firma_id'];//firma
    $delegat = $_POST['delegat'];//delegat

    $sql_firma = "SELECT * FROM lista_firme WHERE id_firma='$firma_id'";//interogare pt firma
    $result_firma = mysqli_query($conn, $sql_firma);

    while($row_firma = mysqli_fetch_array($result_firma)){ //stocare variabile date firma
      $firma = $row_firma['firma'];
      $cif = $row_firma['cif'];
      $nr_inm_reg_com = $row_firma['nr_inm_reg_com'];
      $localitate = $row_firma['localitate'];
      $strada = $row_firma['strada'];
      $nr = $row_firma['nr'];
      $judet = $row_firma['judet'];
    }
    //test

    echo $firma. "<br>";
    echo $cif. "<br>";
    echo $nr_inm_reg_com. "<br>";
    echo $localitate. "<br>";
    echo $strada. "<br>";
    echo $nr. "<br>";
    echo $judet. "<br>";

    $sql_delegat = "SELECT * FROM lista_delegati WHERE id_delegat='$delegat'"; //interogare pt delegat
    $result_delegat = mysqli_query($conn, $sql_delegat);

    while($row_delegat = mysqli_fetch_array($result_delegat)){ //stocare variabile date delegat
      $nume_delegat = $row_delegat['nume_delegat'];
      $serie_buletin = $row_delegat['serie_buletin'];
      $nr_buletin = $row_delegat['nr_buletin'];
      $eliberat_de = $row_delegat['eliberat_de'];
      $cnp = $row_delegat['cnp'];
      $nr_mijloc_transport = $row_delegat['nr_mijloc_transport'];
      $ora = $row_delegat['ora'];
    }
    //test

    echo $nume_delegat. "<br>";
    echo $serie_buletin. "<br>";
    echo $nr_buletin. "<br>";
    echo $eliberat_de. "<br>";
    echo $cnp. "<br>";
    echo $nr_mijloc_transport. "<br>";
    echo $ora. "<br>";

    //insrare date

    $sql_introducere= "INSERT INTO introducere (cod_produs, nr_aviz, denumire_produs,
    ART, comentariu, pret_ron, cantitate, firma, cif, nr_inm_reg_com, localitate, strada,
    nr, judet, nume_delegat, serie_buletin, nr_buletin, eliberat_de, cnp, nr_mijloc_transport,
    ora, mentiuni1, mentiuni2, nr_factura, valoare, valoare_TVA, TVA,
    facturat_ron, termen_plata, pret_ofertat, reducere_acordata) VALUES ('$cod_produs',
    '$nr_aviz', '$denumire_produs', '$ART', '$comentariu', '$pret_ron', '$cantitate', '$firma', '$cif',
    '$nr_inm_reg_com', '$localitate', '$strada', '$nr', '$judet', '$nume_delegat','$serie_buletin',
    '$nr_buletin', '$eliberat_de', '$cnp', '$nr_mijloc_transport','$ora', '$mentiuni1', '$mentiuni2',
    '$nr_factura', '$valoare', '$cota_tva', '$TVA' '$facturat_ron', '$termen_plata', '$pret_ofertat', '$reducere_acordata')"; //inserare date in tabelul INTRODUCERE
    $result_introducere = mysqli_query($conn, $sql_introducere);

    //header("Location: ../insert_date.php");*/
