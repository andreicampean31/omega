  <?php
    include 'header.php';

    //intertogare
    $sql_aratafirma = "SELECT * FROM lista_firme";
    $result_aratafirma = mysqli_query($conn, $sql_aratafirma);
    echo "<h2 class='text-center'>Lista firmelor</h2>
          <div class='row'>
          <div class='container-fluid'>
          <div class='table-responsive'>
          <table class='table'>
            <tr>
              <th>delete</th>
              <th>id</th>
              <th>id_firma</th>
              <th>firma</th>
              <th>cif</th>
              <th>nr_inm_reg_com</th>
              <th>localitate</th>
              <th>strada</th>
              <th>nr</th>
              <th>judet</th>
            </tr>";
            while($row_aratafirma = mysqli_fetch_array($result_aratafirma)){
              echo "<tr>
              <td>
                <a href='includes\delete.inc.php?firmaid=". $row_aratafirma['id']."'>Delete</a>
              </td>
              <td>". $row_aratafirma['id']. "</td>";
              echo "<td>". $row_aratafirma['id_firma']. "</td>";
              echo "<td>". $row_aratafirma['firma']. "</td>";
              echo "<td>". $row_aratafirma['cif']. "</td>";
              echo "<td>". $row_aratafirma['nr_inm_reg_com']. "</td>";
              echo "<td>". $row_aratafirma['localitate']. "</td>";
              echo "<td>". $row_aratafirma['strada']. "</td>";
              echo "<td>". $row_aratafirma['nr']. "</td>";
              echo "<td>". $row_aratafirma['judet']. "</td></tr>";
              echo "<br>";
            }
      echo "</table></div></div></div></div>";

      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if(strpos($url, 'error=empty') != false){
        echo "you left one or more fileds empty";
      }
      ?>

      <form class="" action="includes/insert_firme.inc.php" method="post">
        <tr>
          <td></td>
          <td><input type="text" name="id_firma" placeholder="id firma"> </td>
          <td><input type="text" name="firma" placeholder="nume firma"> </td>
          <td><input type="text" name="cif" placeholder="CIF"> </td>
          <td><input type="text" name="nr_inm_reg_com" placeholder="nr_inm_reg_com"> </td>
          <td><input type="text" name="localitate" placeholder="localitatea"> </td>
          <td><input type="text" name="strada" placeholder="strada"> </td>
          <td><input type="text" name="nr" placeholder="nr"> </td>
          <td><input type="text" name="judet" placeholder="judet"> </td>
          <td><input type="submit" value="Insert"> </td>
        </tr>
      </form>
    </section>
    <?php
      include 'footer.php';
     ?>
  </body>
</html>
