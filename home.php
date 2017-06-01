<?php
  include 'header.php';

    echo '
          <div class="row">';

    if(isset( $_SESSION['uid'])){
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="facturare.php" class="portfolio-link">
                          <i class="fa fa-3x">Facturare</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="ofertare.php" class="portfolio-link">
                          <i class="fa fa-3x">Ofertare</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="comanda.php" class="portfolio-link">
                          <i class="fa fa-3x">Comenzi</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="insert_delegati.php" class="portfolio-link">
                          <i class="fa fa-3x">Delegati</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="insert_firme.php" class="portfolio-link">
                          <i class="fa fa-3x">Firme</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="setari.php" class="portfolio-link">
                          <i class="fa fa-3x">Setari</i>
              </a>
          </div>';
      }
    else{
      echo "
            <div class='login_hack'>
              <form action='index.php'>
                <input type='submit' value='Login'>
              </form>
            </div>
            ";
    }
?>

</div>
</div>
</div>
</section>

<?php
  include 'footer.php';
 ?>
  </body>
</html>
