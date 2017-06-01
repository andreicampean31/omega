<?php
  include 'header.php';

  //intertogare
  $sql_oferte = "SELECT * FROM oferte";
  $result_oferte = mysqli_query($conn, $sql_oferte);
  echo "<h2 class='text-center'>Oferte</h2>";
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if(strpos($url, 'error=empty') != false){
    echo '<div class="container">
            <div class="alert alert-danger alert-dismissable">
            <a href="ofertare.php" class="close" data-dismiss="alert" aria-label="close">&times</a>
            <strong>Atentie!</strong>Ai lasat unul sau mai multe campuri libere!
          </div></div>';
  }
  echo "<div class='container-fluid'>
  <div class='table-responsive'>
  <table class='table'>
    <tr>
      <th>Comanda/Reducere</th>
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
      <th>Valoare</th>
      <th>TVA</th>
      <th>Facturat RON</th>
      <th>Termen plata</th>
      <th>Persoana contact</th>
      <th>Pret ofertat</th>
      <th>Reducere acordata</th>
    </tr>";
    while($row_oferte = mysqli_fetch_array($result_oferte)){
      echo "<tr>
      <td>
      <form action ='?comanda_reducere!id=". $row_oferte['id'] ."' method='POST'>
        <button id='myBtn'>Comanda/Reducere</button>
      </form>
      </td>
      <td>". $row_oferte['id']. "</td>";
      echo "<td>". $row_oferte['denumire_produs']. "</td>";
      echo "<td>". $row_oferte['pretRON']. "</td>";
      echo "<td>". $row_oferte['U_M']. "</td>";
      echo "<td>". $row_oferte['cantitate']. "</td>";
      echo "<td>". $row_oferte['firma']. "</td>";
      echo "<td>". $row_oferte['delegat']. "</td>";
      echo "<td>". $row_oferte['mentiuni1']. "</td>";
      echo "<td>". $row_oferte['mentiuni2']. "</td>";
      echo "<td>". $row_oferte['cota_tva']. "</td>";
      echo "<td>". $row_oferte['valoare']. "</td>";
      echo "<td>". $row_oferte['tva']. "</td>";
      echo "<td>". $row_oferte['facturatRON']. "</td>";
      echo "<td>". $row_oferte['termen_plata']. "</td>";
      echo "<td>". $row_oferte['persoana_contact']. "</td>";
      echo "<td>". $row_oferte['pret_ofertat']. "</td>";
      echo "<td>". $row_oferte['reducere']. "</td></tr>";
      echo "<br>";
    }
echo "</table></div></div></div></div>";
 ?>

 <div class="container">
  <form class="" action="includes/ofertare.inc.php" method="post">
    <input type="text" name="denumire_produs" placeholder="Denumire produs">
    <select class="" name="tip_cantitate">
      <option value="buc">buc</option>
      <option value=""></option>
    </select>
    <input type="text" name="cantitate" placeholder="Cantitate">
    <select class="" name="firma">
      <?php
        $sql_listafirma = "SELECT * FROM lista_firme";
        $result_listafirma = mysqli_query($conn, $sql_listafirma);

        while($row_listafirma = mysqli_fetch_array($result_listafirma)){
          echo '<option>' .$row_listafirma['id_firma']. '</option>';
        }
       ?>
    </select>
    <select class="" name="delegat">
      <?php
       $sql_listadelegati = "SELECT * FROM lista_delegati";
       $result_listadelegati = mysqli_query($conn, $sql_listadelegati);

       while($row_listadelegati = mysqli_fetch_array($result_listadelegati)){
         echo '<option>' .$row_listadelegati['id_delegat']. '</option>';
       }

       ?>
    </select>
    <input type="text" name="mentiuni1" placeholder="Mentiune 1">
    <input type="text" name="mentiuni2" placeholder="Mentiuni 2">
    <input type="text" name="termen_plata" placeholder="Termen plata">
    <input type="text" name="pers_contact" placeholder="Persoana contact">
    <input type="text" name="pret_ofertat" placeholder="Pret ofertat">
    <input type="text" name="reducere" placeholder="Reducere acordata">
    <input type="submit" value="Insert">
  </form>
</div>
  <?php
  //url
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  //verificare url

  if(strpos($url, 'comanda_reducere!id=')){
    echo "<form class='' action='includes\comanda.inc.php?id=".$_GET['comanda_reducere!id']. " ' method='post'>
            <input type='text' name='nr_comanda' placeholder='Numar comanda'>
            <input type='text' name='termen_livrare' placeholder='Termend de livrare'>
            <input type='submit' value='Coamnda'>
          </form>
          <form class='' action='includes/reducere.inc.php?id=".$_GET['comanda_reducere!id']. " ' method='post'>
            <input type='text' name='reducere_update' placeholder='Reducere'>
            <input type='submit' value='Modifica'>
          </form>";
  }
   ?>
  </section>
<?php include 'footer.php'; ?>
</body>
</html>
