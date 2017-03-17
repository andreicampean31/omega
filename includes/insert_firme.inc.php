<?php
  include '../dbh.php';
  session_start();

  $id_firma = $_POST['id_firma'];
  $firma = $_POST['firma'];
  $cif = $_POST['cif'];
  $reg = $_POST['nr_inm_reg_com'];
  $loc = $_POST['localitate'];
  $str = $_POST['strada'];
  $nr = $_POST['nr'];
  $jud = $_POST['judet'];

  $sql_firma = "INSERT INTO lista_firme (id_firma, firma, cif, nr_inm_reg_com, localitate, strada, nr, judet)
                  VALUES ('$id_firma', '$firma', '$cif', '$reg', '$loc', '$str', '$nr', '$jud')";
  $result_firma = mysqli_query($conn, $sql_firma);

  header("Location: ../insert_firme.php");
