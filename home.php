<?php
  include 'header.php';
?>

<?php
    if(isset( $_SESSION['uid'])){
      echo "<div class='facturare'>
        <form action='facturare.php'>
          <input type='submit' value='Facturare'>
        </form>
      </div>";
      echo "<div class='inserare date'>
        <form action='insert_date.php'>
          <input type='submit' value='Inserare date'>
        </form>
      </div>";
      echo "<div class='inserare firme'>
        <form action='insert_firme.php'>
          <input type='submit' value='Inserare firme'>
        </form>
      </div>";
      echo "<div class='inserare delegati'>
        <form action='insert_delegati.php'>
          <input type='submit' value='Inserare delegati'>
        </form>
      </div>";
      echo "<div class='setari'>
        <form action='setari.php'>
          <input type='submit' value='Setari'>
        </form>
      </div>";
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
  </body>
</html>
