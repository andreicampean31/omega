<?php
  include 'header.php';

  //interogare
  $sql_aratadelegati = "SELECT * FROM lista_delegati";
  $result_aratadelegati = mysqli_query($conn, $sql_aratadelegati);

  echo "<h2 class='text-center'>Lista delegatilor</h2>";
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url, 'error=empty') != false){
          echo '<div class="container">
                <div class="alert alert-danger alert-dismissable">
                  <a href="insert_delegati.php" class="close" data-dismiss="alert" aria-label="close">&times</a>
                  <strong>Atentie!</strong>Ai lasat unul sau mai multe campuri libere!
                </div></div>';
        }
        echo "<div class='container-fluid'>
        <div class='table-responsive'>
        <table class='table'>
          <tr>
            <th>delete</th>
            <th>id</th>
            <th>id_delegat</th>
            <th>Nume delegat</th>
            <th>Serie buletin</th>
            <th>Numar buletin</th>
            <th>Eliberat de</th>
            <th>CNP</th>
            <th>nr mij transp</th>
          </tr>";
          while($row_aratadelegati = mysqli_fetch_array($result_aratadelegati)){
            echo "<tr>
            <td>
              <a href='includes\delete.inc.php?delegatid=". $row_aratadelegati['id']."'>Delete</a>
            </td>
            <td>". $row_aratadelegati['id']. "</td>";
            echo "<td>". $row_aratadelegati['id_delegat']. "</td>";
            echo "<td>". $row_aratadelegati['nume_delegat']. "</td>";
            echo "<td>". $row_aratadelegati['serie_buletin']. "</td>";
            echo "<td>". $row_aratadelegati['nr_buletin']. "</td>";
            echo "<td>". $row_aratadelegati['eliberat_de']. "</td>";
            echo "<td>". $row_aratadelegati['cnp']. "</td>";
            echo "<td>". $row_aratadelegati['nr_mijloc_transport']. "</td></tr>";
            echo "<br>";
          }

    echo "</table></div></div></div></div>";

      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if(strpos($url, 'error=empty') != false){
        echo "you left one or more fileds empty";
      }
     ?>
      <div class="container">
        <form class='form-inline' action="includes/insert_delegati.inc.php" method="post">
           <input type="text" name="id_delegat" placeholder="id delegat">
           <input type="text" name="nume_delegat" placeholder="nume delegat">
           <input type="text" name="serie_buletin" placeholder="serie buletin">
           <input type="text" name="nr_buletin" placeholder="numar buletin">
           <input type="text" name="eliberat_de" placeholder="eliberat de">
           <input type="text" name="cnp" placeholder="CNP">
           <input type="text" name="nr_mij_transp" placeholder="Numar mijloc de transport">
           <input type="submit" value="Insert">
         </form>
      </div>


      </section>
  <?php
      include 'footer.php';
   ?>
  </body>
</html>
