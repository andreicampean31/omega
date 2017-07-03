<?php
include '../dbh.php';
session_start();
$error_fact = 0; //variabila eroare
if ( isset ( $_POST['factura_id'] ) )
   {
      //nr factura
      $sql_nr_factura = "SELECT MAX(nr_factura) FROM factura";
      $result_nr_factura = mysqli_query($conn, $sql_nr_factura);

      while($row_nr_factura = mysqli_fetch_assoc($result_nr_factura)){
        $nr_factura = $row_nr_factura['MAX(nr_factura)'] + 1;
        echo $nr_factura. "</br>";
      }

      //check firma
      foreach($_POST['factura_id'] as $id_check){
        $sql_factura_check_firma = "SELECT firma FROM factura WHERE cod_produs='$id_check'";
        $result_factura_check_firma = mysqli_query($conn, $sql_factura_check_firma);
        while($row_factura_check_firma = mysqli_fetch_array($result_factura_check_firma)){
          $firma_check_factura = $row_factura_check_firma['firma'];
          echo $firma_check_factura. "</br>";
        }
      }
      foreach ( $_POST[ 'factura_id' ] as $factura_id ){
           echo $factura_id. "</br>";
           $id = $factura_id;
           //check ultima firma
           $sql_check_u = "SELECT firma FROM factura WHERE cod_produs='$factura_id'";
           $result_check_u = mysqli_query($conn, $sql_check_u);
           while($row_check_u = mysqli_fetch_array($result_check_u)){
             echo $row_check_u['firma'];
             if($row_check_u['firma'] != $firma_check_factura){
               echo"error";
               $error_fact = 1;
               header("Location: ../facturare.php?error=firma_diferita&sortare=toate");
             }
           }
           if($error_fact == 0){
             //adaugare nr de factura
             $sql_factura_update = "UPDATE factura SET nr_factura = '$nr_factura', data_factura=CURRENT_DATE WHERE cod_produs = '$factura_id'";
             $result_factura_update = mysqli_query($conn, $sql_factura_update);
             header("Location: ../factura.php?nr_factura=$nr_factura");
           }
         }
   }
 ?>
