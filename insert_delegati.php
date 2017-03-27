<?php
  include 'header.php';

  //interogare
  $sql_aratadelegati = "SELECT * FROM lista_delegati";
  $result_aratadelegati = mysqli_query($conn, $sql_aratadelegati);

  echo "<table class='table_firme_delegat'>
          <caption>Delegati</caption>
          <tr>
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
            echo "<tr><td>". $row_aratadelegati['id']. "</td>";
            echo "<td>". $row_aratadelegati['id_delegat']. "</td>";
            echo "<td>". $row_aratadelegati['nume_delegat']. "</td>";
            echo "<td>". $row_aratadelegati['serie_buletin']. "</td>";
            echo "<td>". $row_aratadelegati['nr_buletin']. "</td>";
            echo "<td>". $row_aratadelegati['eliberat_de']. "</td>";
            echo "<td>". $row_aratadelegati['cnp']. "</td>";
            echo "<td>". $row_aratadelegati['nr_mijloc_transport']. "</td></tr>";
            echo "<br>";
          }
          echo "<form class='' action='includes/insert_delegati.inc.php' method='post'>
                  <tr>
                    <td></td>
                    <td><input type='text' name='id_delegat' placeholder='id delegat'> </td>
                    <td><input type='text' name='nume_delegat' placeholder='nume delegat'> </td>
                    <td><input type='text' name='serie_buletin' placeholder='serie buletin'> </td>
                    <td><input type='text' name='nr_buletin' placeholder='numar buletin'> </td>
                    <td><input type='text' name='eliberat_de' placeholder='eliberat de'> </td>
                    <td><input type='text' name='cnp' placeholder='CNP'> </td>
                    <td><input type='text' name='nr_mij_transp' placeholder='Numar mijloc de transport'> </td>
                    <td><input type='submit' value='Insert'> </td>
                  </tr></form>";
    echo "</table>";

      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if(strpos($url, 'error=empty') != false){
        echo "you left one or more fileds empty";
      }
     ?>


  </body>
</html>
