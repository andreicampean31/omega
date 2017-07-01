<?php
  include 'header.php';

  echo "<h2 class='text-center'>FACTURIER</h2></br>";
  echo '<form class="" action="?sortare=" method="get">
    <p>Cum vrei sa sortezi tabelul?</p>
    <input type="submit" name="sortare" value="facturate">
    <input type="submit" name="sortare" value="nefacturate">
    <input type="submit" name="sortare" value="toate">
  </form>';

  $sortare = $_GET['sortare']; //tipul sortarii

  //ce fel de sortare
  if($sortare == 'facturate'){ //cele facturate
    $sql_factura = "SELECT * FROM factura WHERE nr_factura > 0";
    $result_factura = mysqli_query($conn, $sql_factura);
  }
  else if($sortare == 'nefacturate'){ //cele nefacturate
    $sql_factura = "SELECT * FROM factura WHERE nr_factura = 0";
    $result_factura = mysqli_query($conn, $sql_factura);
  }
  else{//toate
    $sql_factura = "SELECT * FROM factura";
    $result_factura = mysqli_query($conn, $sql_factura);
  }
  echo "<div class='container-fluid'>
  <div class='table-responsive'><form action='includes/factura.inc.php' method='post'>
  <table class='fancyTable' id='myTable05'>
    <thead>
    <tr>
      <th>Factura</th>
      <th>Cod produs</th>
      <th>Denumire produs</th>
      <th>Pret RON</th>
      <th>U/M</th>
      <th>Cantitate</th>
      <th>Firma</th>
      <th>Delegat</th>
      <th>Mentiuni1</th>
      <th>Mentiuni2</th>
      <th>Cota TVA</th>
      <th>Valoare</th>
      <th>TVA</th>
      <th>Facturat RON</th>
      <th>Termen plata</th>
      <th>Persoana contact</th>
      <th>Pret ofertat</th>
      <th>Reducere acordata</th>
      <th>Nr comanda</th>
      <th>Termen de livrare</th>
      <th>Nr aviz</th>
      <th>Data aviz</th>
      <th>Nr factura</th>
      <th>Data factura</th>
      <th>Scadenta</th>
    </tr></thead>";
    while($row_factura = mysqli_fetch_array($result_factura)){
      echo "<tbody><tr class='grid'>
      <td>
        <input type='checkbox' name='factura_id[]' value='". $row_factura['cod_produs']. "' />
      </td>
      <td>". $row_factura['cod_produs']. "</td>";
      echo "<td>". $row_factura['denumire_produs']. "</td>";
      echo "<td>". $row_factura['pretRON']. "</td>";
      echo "<td>". $row_factura['U_M']. "</td>";
      echo "<td>". $row_factura['cantitate']. "</td>";
      echo "<td>". $row_factura['firma']. "</td>";
      echo "<td>". $row_factura['delegat']. "</td>";
      echo "<td>". $row_factura['mentiuni1']. "</td>";
      echo "<td>". $row_factura['mentiuni2']. "</td>";
      echo "<td>". $row_factura['cota_tva']. "</td>";
      echo "<td>". $row_factura['valoare']. "</td>";
      echo "<td>". $row_factura['tva']. "</td>";
      echo "<td>". $row_factura['facturatRON']. "</td>";
      echo "<td>". $row_factura['termen_plata']. "</td>";
      echo "<td>". $row_factura['persoana_contact']. "</td>";
      echo "<td>". $row_factura['pret_ofertat']. "</td>";
      echo "<td>". $row_factura['reducere']. "</td>";
      echo "<td>". $row_factura['nr_comanda']. "</td>";
      echo "<td>". $row_factura['termen_livrare']. "</td>";
      echo "<td>". $row_factura['nr_aviz']. "</td>";
      echo "<td>". $row_factura['data_aviz']. "</td>";
      echo "<td>". $row_factura['nr_factura']. "</td>";
      echo "<td>". $row_factura['data_factura']. "</td>";
      //scadenta
      $sql_date_factura = "UPDATE factura SET scadenta = DATE_ADD(data_factura, INTERVAL termen_plata DAY) WHERE cod_produs=$row_factura[cod_produs]";
      $result_date_factura = mysqli_query($conn, $sql_date_factura);
        echo "<td>". $row_factura['scadenta']. "</td></tr>";
    }
    if(!($sortare == 'facturate' || $sortare == 'toate')){
      echo "<input type='submit' value='factura'>";
    }
    echo "</form></tbody></table></div></div></div></div>";
    ?>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="js/jquery.fixedheadertable.js"></script>
    <script>
    $('#myTable05').fixedHeaderTable({
   	altClass: 'odd',
   	footer: true,
   	fixedColumns: 1,
   });
   	</script>
    </section>
  <?php include 'footer.php'; ?>
  </body>
  </html>
