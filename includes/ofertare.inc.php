<?php
  include '../dbh.php';
  session_start();
  $sql_tva = "SELECT cota_tva FROM setari"; //cauta valuarea actuala tva in DB
  $result_tva = mysqli_query($conn, $sql_tva);

  if($row = mysqli_fetch_assoc($result_tva)){
    $cota_tva = $row['cota_tva'];
  }
  //variabile de introdus
    $denumire_produs = $_POST['denumire_produs']; //denumirea produsului
    $tip_cantitate = $_POST['tip_cantitate']; //lungime sau bucata
    $cantitate = $_POST['cantitate']; //cantitatea
    $mentiuni1 = $_POST['mentiuni1']; //neobligatoriu
    $mentiuni2 = $_POST['mentiuni2']; //neobligatoriu
    $termen_plata = $_POST['termen_plata']; //termenul de plata
    $persoana_contact = $_POST['pers_contact'];
    $pret_ofertat = $_POST['pret_ofertat']; //pretul ofertat
    $reducere = $_POST['reducere']; //reducerea acordata

  //verificare daca nu s-au lasat spatii libere unde nu trebuie

    //variabile calcualte
      $pret_ron = $pret_ofertat*(1+$reducere); // pretul final
      $valoare = $pret_ron*$cantitate; //valoarea comenzii
      $TVA = ROUND(($valoare*($cota_tva)/100), 0);
      $facturat_ron = $valoare+$TVA; //facturat +TVA;
      /*echo $pret_ron. "<br>";
      echo $valoare. "<br>";
      echo $TVA. "<br>";
      echo $facturat_ron. "<br>";
      echo $tip_cantitate;*/

    //firma si delegat
      $firma = $_POST['firma'];
      $delegat = $_POST['delegat'];
      //echo $firma;
      //echo $delegat;
      $sql_firma = "SELECT * FROM lista_firme WHERE id_firma='$firma'";//interogare pt firma
      $result_firma = mysqli_query($conn, $sql_firma);

      while($row_firma = mysqli_fetch_array($result_firma)){ //stocare variabile date firma
        $firma = $row_firma['firma'];
      }
      //test

      //echo $firma. "<br>";

      $sql_delegat = "SELECT * FROM lista_delegati WHERE id_delegat='$delegat'"; //interogare pt delegat
      $result_delegat = mysqli_query($conn, $sql_delegat);

      while($row_delegat = mysqli_fetch_array($result_delegat)){ //stocare variabile date delegat
        $nume_delegat = $row_delegat['nume_delegat'];
      }
      //test

      //echo $nume_delegat. "<br>";


      //insrare date

      $sql_oferta = "INSERT INTO oferte (denumire_produs, pretRON, U_M, cantitate, firma, delegat, mentiuni1, mentiuni2, cota_tva, valoare, tva, facturatRON, termen_plata, persoana_contact, pret_ofertat, reducere)
                        VALUES ('$denumire_produs', '$pret_ron', '$tip_cantitate', '$cantitate', '$firma', '$nume_delegat', '$mentiuni1', '$mentiuni2', '$cota_tva', '$valoare', '$TVA', '$facturat_ron', '$termen_plata', '$persoana_contact', '$pret_ofertat', '$reducere')";
      $result_oferta = mysqli_query($conn, $sql_oferta);
      header("Location: ../ofertare.php");
