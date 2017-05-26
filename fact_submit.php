<?php
  include 'header.php';
  $id=$_GET['id']; //id comanda
  //echo $id;
  $sql_factura = "INSERT INTO factura (cod_produs, denumire_produs, pretRON, U_m, cantitate, firma, delegat, mentiuni1, mentiuni2, cota_tva, valoare, tva, facturatRON, termen_plata, persoana_contact, pret_ofertat, reducere, nr_comanda, termen_livrate)
                  SELECT *
                  FROM comanda
                  WHERE id='$id';

                  DELETE FROM comanda
                  WHERE id='$id';";
  $result_factura = mysqli_query($conn, $sql_factura);
 ?>
<form class="" action="includes/factura.inc.php" method="post">
  <input type="text" name="" placeholder="">
</form>

<?php include 'footer.php'; ?>
