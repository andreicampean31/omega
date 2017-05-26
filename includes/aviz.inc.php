<?php
include '../dbh.php';
session_start();

if ( isset ( $_POST['aviz_id'] ) )
   {
      $sql_nr_aviz = "SELECT nr_aviz FROM factura ORDER BY cod_produs DESC LIMIT 1";
      $result_nr_aviz = mysqli_query($conn, $sql_nr_aviz);

      while($row_nr_aviz = mysqli_fetch_assoc($result_nr_aviz)){
        $nr_aviz = $row_nr_aviz['nr_aviz'] + 1;
        echo $nr_aviz;
      }
      foreach ( $_POST[ 'aviz_id' ] as $aviz_id )
         {
           echo $aviz_id;
           $id = $aviz_id;
            //datele de mutat din tabelul comanda
            $sql_aviz_comanda = "SELECT * FROM comanda WHERE id='$id'";
            $result_aviz_comanda = mysqli_query($conn, $sql_aviz_comanda);

            while($row_aviz_comanda = mysqli_fetch_array($result_aviz_comanda)){
              $denumire_produs_a = $row_aviz_comanda['denumire_produs'];
              $pretRON_a = $row_aviz_comanda['pretRON'];
              $U_M_a = $row_aviz_comanda['U_M'];
              $cantitate_a = $row_aviz_comanda['cantitate'];
              $firma_a = $row_aviz_comanda['firma'];
              $delegat_a = $row_aviz_comanda['delegat'];
              $mentiuni1_a = $row_aviz_comanda['mentiuni1'];
              $mentiuni2_a = $row_aviz_comanda['mentiuni2'];
              $cota_tva_a = $row_aviz_comanda['cota_tva'];
              $valoare_a = $row_aviz_comanda['valoare'];
              $tva_a = $row_aviz_comanda['tva'];
              $facturatRON_a = $row_aviz_comanda['facturatRON'];
              $termen_plata_a = $row_aviz_comanda['termen_plata'];
              $persoana_contact_a = $row_aviz_comanda['persoana_contact'];
              $pret_ofertat_a = $row_aviz_comanda['pret_ofertat'];
              $reducere_a = $row_aviz_comanda['reducere'];
              $nr_comanda_a = $row_aviz_comanda['nr_comanda'];
              $termen_livrare_a = $row_aviz_comanda['termen_livrare'];
            }


            //inserare in factura
            $sql_aviz = "INSERT INTO factura (denumire_produs, pretRON, U_M, cantitate, firma, delegat, mentiuni1, mentiuni2, cota_tva, valoare, tva, facturatRON, termen_plata, persoana_contact, pret_ofertat, reducere, nr_comanda, termen_livrare)
                        VALUES ('$denumire_produs_a', '$pretRON_a', '$U_M_a', '$cantitate_a', '$firma_a', '$delegat_a', '$mentiuni1_a', '$mentiuni2_a', '$cota_tva_a', '$valoare_a', '$tva_a', '$facturatRON_a', '$termen_plata_a', '$persoana_contact_a', '$pret_ofertat_a', '$reducere_a', '$nr_comanda_a', '$termen_livrare_a')";
            $result_aviz = mysqli_query($conn, $sql_aviz);

            //$sql_delete = "DELETE FROM comanda WHERE id='$aviz_id'";
            //$result_delete = mysqli_query($conn, $sql_delete);

            $sql_aviz_update = "UPDATE factura SET nr_aviz = '$nr_aviz', data_aviz=CURRENT_DATE ORDER BY cod_produs DESC LIMIT 1";
            $result_aviz_update = mysqli_query($conn, $sql_aviz_update);
         }
   }

header("Location: ../aviz.php?nr_aviz=$nr_aviz");
 ?>
