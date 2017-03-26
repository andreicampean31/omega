<?php

  include 'header.php';
  session_start();

  $sql_tva_actual = "SELECT cota_tva FROM setari"; //cauta valuarea actuala tva in DB
  $result_tva_acutal = mysqli_query($conn, $sql_tva_actual);

  if($row = mysqli_fetch_assoc($result_tva_acutal)){ //daca exista raspuns il afiseaza
    echo "Cota actuala TVA este: ". $row['cota_tva']. "%"
    echo "<form action='setari.php' method='GET'>
      <input type='submit' name='cota_tva' value='Schimba cota TVA'>
    </form>"; //posibilitatea de a schimba valoarea

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //url-ul daca se va schimba valoarea

    if(strpos($url, 'cota_tva=Schimba+cota+TVA') == TRUE){
      echo  "<form action='includes/setari.inc.php' method='POST'>
         <input type='text' name='TVA_cota' placeholder='TVA'>
         <input type='submit' name=' value='Submit'>
       </form>"; //schimba valoarea

    }
  }
  else{ //daca nicio valoare nu a fost setata
    echo "Nicio valoare nu a fost data momentan TVA-ului";
    echo "<form action='includes/setari.inc.php' method='POST'>
       <input type='text' name='TVA_cota_initial' placeholder='TVA'>
       <input type='submit' name=' value='Submit'>
     </form>";
  }
 ?>

 </body>
</html>
