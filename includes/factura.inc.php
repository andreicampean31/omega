<?php
include '../dbh.php';
session_start();

if ( isset ( $_POST['factura_id'] ) )
   {
      $sql_nr_factura = "SELECT nr_factura FROM factura ORDER BY cod_produs DESC LIMIT 1";
      $result_nr_factura = mysqli_query($conn, $sql_nr_factura);

      while($row_nr_factura = mysqli_fetch_assoc($result_nr_factura)){
        $nr_factura = $row_nr_factura['nr_factura'] + 1;
        echo $nr_factura. "</br>";
      }
      foreach ( $_POST[ 'factura_id' ] as $factura_id )
         {
           echo $factura_id. "</br>";
           $id = $factura_id;

            //adaugare nr de factura
            $sql_factura_update = "UPDATE factura SET nr_factura = '$nr_factura', data_factura=CURRENT_DATE ORDER BY cod_produs DESC LIMIT 1";
            $result_factura_update = mysqli_query($conn, $sql_factura_update);
         }
   }

header("Location: ../factura.php?nr_factura=$nr_factura");
 ?>
