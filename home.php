<?php
  include 'header.php';
?>


<?php
    echo '
          <div class="row">';

    if(isset( $_SESSION['uid'])){
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="facturare.php" class="portfolio-link" data-toggle="modal">
                          <i class="fa fa-3x">facturare</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="insert_date.php" class="portfolio-link" data-toggle="modal">
                          <i class="fa fa-3x">introducere</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="insert_delegati.php" class="portfolio-link" data-toggle="modal">
                          <i class="fa fa-3x">delegati</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="insert_firme.php" class="portfolio-link" data-toggle="modal">
                          <i class="fa fa-3x">firme</i>
              </a>
          </div>';
      echo '
          <div class="col-sm-4 portfolio-item">
              <a href="setari.php" class="portfolio-link" data-toggle="modal">
                          <i class="fa fa-3x">setari</i>
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
