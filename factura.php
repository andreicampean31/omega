<?php
  include 'header.php';
?>

  <form class="" action="factura.php?sortare=" method="post">
    <input type="submit" name="facturate" value="facturate">
    <input type="submit" name="nefacturate" value="nefacturate">
    <input type="submit" name="toate" value="toate">
  </form>

<?php
  //intertogare

  $sql_factura = "SELECT * FROM factura";
  $result_factura = mysqli_query($conn, $sql_factura);

  echo "<h2 class='text-center'>Comenzi in asteptare</h2>";
  echo "<div class='container-fluid'>
  <div class='table-responsive'>
  <table class='table'>
    <tr>
      <th>Aviz</th>
      <th>id</th>
      <th>Denumire produs</th>
      <th>Pret RON</th>
      <th>U/M</th>
      <th>Cantitate</th>
      <th>Firma</th>
      <th>Delegat</th>
      <th>Mentiuni1</th>
      <th>Mentiuni2</th>
      <th>Cota TVA</th>
      <th>Vsaloare</th>
      <th>TVA</th>
      <th>Facturat RON</th>
      <th>Termen plata</th>
      <th>Persoana contact</th>
      <th>Pret ofertat</th>
      <th>Reducere acordata</th>
      <th>Nr comanda</th>
      <th>Termen de livrare</th>
      <th>Nr zile scadente ramase</th>
    </tr>";
    while($row_comanda_afisare = mysqli_fetch_array($result_comanda_afisare)){
      echo "<tr>
      <td>
      <form action='includes/aviz.inc.php' method='post'>
        <input type='checkbox' name='aviz_id[]' value='". $row_comanda_afisare['id']. "' />
      </td>
      <td>". $row_comanda_afisare['id']. "</td>";
      echo "<td>". $row_comanda_afisare['denumire_produs']. "</td>";
      echo "<td>". $row_comanda_afisare['pretRON']. "</td>";
      echo "<td>". $row_comanda_afisare['U_M']. "</td>";
      echo "<td>". $row_comanda_afisare['cantitate']. "</td>";
      echo "<td>". $row_comanda_afisare['firma']. "</td>";
      echo "<td>". $row_comanda_afisare['delegat']. "</td>";
      echo "<td>". $row_comanda_afisare['mentiuni1']. "</td>";
      echo "<td>". $row_comanda_afisare['mentiuni2']. "</td>";
      echo "<td>". $row_comanda_afisare['cota_tva']. "</td>";
      echo "<td>". $row_comanda_afisare['valoare']. "</td>";
      echo "<td>". $row_comanda_afisare['tva']. "</td>";
      echo "<td>". $row_comanda_afisare['facturatRON']. "</td>";
      echo "<td>". $row_comanda_afisare['termen_plata']. "</td>";
      echo "<td>". $row_comanda_afisare['persoana_contact']. "</td>";
      echo "<td>". $row_comanda_afisare['pret_ofertat']. "</td>";
      echo "<td>". $row_comanda_afisare['reducere']. "</td>";
      echo "<td>". $row_comanda_afisare['nr_comanda']. "</td>";
      echo "<td>". $row_comanda_afisare['termen_livrare']. "</td>";
      //numarul de zile scadente
      $sql_date = "SELECT DATEDIFF(termen_livrare, CURRENT_DATE) FROM comanda WHERE id=$row_comanda_afisare[id]";
      $result_date = mysqli_query($conn, $sql_date);
      while($row_date = mysqli_fetch_array($result_date)){
        $zile_scadente = $row_date['DATEDIFF(termen_livrare, CURRENT_DATE)'];
      }
      echo '<td>'.$zile_scadente. '</td></tr>';
      echo "<br>";
    }

    echo "<input type='submit' value='aviz'></form></table></div></div></div></div>";
    ?>
    </section>
  <?php include 'footer.php'; ?>
  </body>
  </html>
