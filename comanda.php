<?php
  include 'header.php';
  echo "<h2 class='text-center'>Comenzi in asteptare</h2>";
  echo '<form action="?sortare=" method="get">
        <input type="submit" name="sortare" value="Fara comanda">
        <input type="submit" name="sortare" value="Cu comanda">
        <input type="submit" name="sortare" value="Toate">
        </form>';
  //eroare firme diferite
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if(strpos($url, 'error=firma_diferita') != false){
    echo '<div class="container">
          <div class="alert alert-danger alert-dismissable">
            <a href="comanda.php" class="close" data-dismiss="alert" aria-label="close">&times</a>
            <strong>Atentie!</strong>Ai selectat doua sau mai multe produse de la firme diferite
          </div></div>';
  }

  $sortare = $_GET['sortare'];
  if($sortare == 'Fara comanda'){
    $sql_comanda_afisare = "SELECT * FROM comanda WHERE nr_comanda = 0";
    $result_comanda_afisare = mysqli_query($conn, $sql_comanda_afisare);
  }
  else if($sortare == 'Cu comanda'){
    $sql_comanda_afisare = "SELECT * FROM comanda WHERE nr_comanda > 0";
    $result_comanda_afisare = mysqli_query($conn, $sql_comanda_afisare);
  }
  else{
    $sql_comanda_afisare = "SELECT * FROM comanda";
    $result_comanda_afisare = mysqli_query($conn, $sql_comanda_afisare);
  }
  echo "<div class='container-fluid'>
  <div class='table-responsive'><form action='includes/aviz.inc.php' method='post'>
  <table class='fancyTable' id='myTable05'>
    <thead>
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
    </tr></thead>";
    while($row_comanda_afisare = mysqli_fetch_array($result_comanda_afisare)){
      echo "<tbody><tr class='grid'>
      <td>
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
    }
    echo "<input type='submit' value='aviz'></form></tbody></table></div></div></div>";
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
