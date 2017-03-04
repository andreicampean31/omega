<?php
  include 'header.php';
 ?>

 <form class="" action="insert_date.inc.php" method="post">
   <input type="text" name="cod_produs" placeholder="Cod produs">
   <input type="text" name="nr_aviz" placeholder="Numar aviz">
   <input type="text" name="denumire_produs" placeholder="Denumire produs">
   <input type="text" name="ART" placeholder="ART (neobligatoriu)">
   <input type="text" name="comentariu" placeholder="Comentariu (neobligatoriu)">
   <!-- buc selection -->
   <input type="text" name="cantitate" placeholder="Cantitate">
   <input type="text" name="mentiuni1" placeholder="Mentiune 1 (neobligatoriu)">
   <input type="text" name="mentiuni2" placeholder="(neobligatoriu)">
   <input type="text" name="nr_factura" placeholder="Numar factura">
   <input type="text" name="termen_plata" placeholder="Termen plata">
   <input type="text" name="pret_ofertat" placeholder="Pret ofertat">
   <input type="text" name="reducere_acordata" placeholder="Reducere acordata">
   <?php
      //lista firme
    ?>
   <input type="submit" value="Insert">
 </form>

 </body>
 </html>
