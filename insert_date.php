<?php
  include 'header.php';
 ?>

 <form class="" action="includes/insert_date.inc.php" method="post">
   <input type="text" name="cod_produs" placeholder="Cod produs">
   <input type="text" name="nr_aviz" placeholder="Numar aviz">
   <input type="text" name="denumire_produs" placeholder="Denumire produs">
   <input type="text" name="ART" placeholder="ART (neobligatoriu)">
   <input type="text" name="comentariu" placeholder="Comentariu (neobligatoriu)">
   <input type="text" name="firma_id" placeholder="Firma">
   <input type="text" name="delegat" placeholder="Delegat">
   <select class="" name="firma">
     <?php
       $sql_listafirma = "SELECT * FROM lista_firme";
       $result_listafirma = mysqli_query($conn, $sql_listafirma);

       while($row_listafirma = mysqli_fetch_array($result_listafirma)){
         echo '<option>' .$row_listafirma['prescurtare_firma']. '</option>';
       }
      ?>
   </select>
   <!-- buc selection -->
   <input type="text" name="cantitate" placeholder="Cantitate">
   <input type="text" name="mentiuni1" placeholder="Mentiune 1 (neobligatoriu)">
   <input type="text" name="mentiuni2" placeholder="(neobligatoriu)">
   <input type="text" name="nr_factura" placeholder="Numar factura">
   <input type="text" name="termen_plata" placeholder="Termen plata">
   <input type="text" name="pret_ofertat" placeholder="Pret ofertat">
   <input type="text" name="reducere_acordata" placeholder="Reducere acordata">
   <input type="submit" value="Insert">
 </form>
<form class="" action="includes/insert_date.inc.php" method="post">

</form>
 </body>
 </html>
