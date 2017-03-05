<?php
  include '../dbh.php';
  session_start();
  $cota_tva = 19/100; //de pus la setari pe viitor
  //variabile de introdus

    $cod_produs = $_POST['cod_produs'];
    $nr_aviz = $_POST['nr_aviz'];
    $denumire_produs = $_POST['denumire_produs'];
    $ART = $_POST['ART'];
    $comentariu = $_POST['comentariu'];
    $cantitate = $_POST['cantitate'];
    $mentiuni1 = $_POST['mentiuni1'];
    $mentiuni2 = $_POST['mentiuni2'];
    $nr_factura = $_POST['nr_factura'];
    $termen_plata = $_POST['termen_plata'];
    $pret_ofertat = $_POST['pret_ofertat'];
    $reducere_acordata = $_POST['reducere_acordata'];

  //variabile calcualte
    $pret_ron = $pret_ofertat*(1+$reducere_acordata);
    $valoare = $pret_ron*$cantitate;
    $TVA = $valoare*$cota_tva;
    $facturat_ron = $valoare+$TVA;
    echo $pret_ron. "<br>";
    echo $valoare. "<br>";
    echo $TVA. "<br>";
    echo $facturat_ron. "<br>";

  //firma si delegat

    
    $sql_var_introduse = "INSERT INTO introducere (cod_produs, nr_aviz, denumire_produs,
    ART, comentariu, pret_ron, cantitate, mentiuni1, mentiuni2, nr_factura, valoare, TVA,
    facturat_ron, termen_plata, pret_ofertat, reducere_acordata) VALUES ('$cod_produs',
    '$nr_aviz', '$denumire_produs', '$ART', '$comentariu', '$pret_ron', '$cantitate',
    '$mentiuni1', '$mentiuni2', '$nr_factura', '$valoare', '$TVA', '$facturat_ron',
    '$termen_plata', '$pret_ofertat', '$reducere_acordata')";
    $result_var_introduse = mysqli_query($conn, $sql_var_introduse);
