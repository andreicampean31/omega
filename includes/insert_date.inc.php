<?php
  include '../dbh.php';
  session_start();

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

    $sql_var_introduse = "INSERT INTO introducere (cod_produs, nr_aviz, denumire_produs,
            ART, comentariu, cantitate, mentiuni1, mentiuni2, nr_factura,
            termen_plata, pret_ofertat, reducere_acordata)
            VALUES ('$cod_produs', '$nr_aviz', '$denumire_produs','$ART',
            '$comentariu', '$cantitate', '$mentiuni1', '$mentiuni2',
            '$nr_factura', '$termen_plata', '$pret_ofertat', '$reducere_acordata')
            "; //introducere in baza de date
    $result_var_introduse = mysqli_query($conn, $sql_var_introduse);

  //variabile calculate

    $pret_ron = $pret_ofertat*(1+$reducere_acordata);
