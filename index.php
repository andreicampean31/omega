<?php
  session_start();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>login</title>
   </head>
   <body>
     <form class="" action="login.inc.php" method="post">
       <input type="text" name="uid" placeholder="username">
       <input type="password" name="pwd" placeholder="password">
       <input type="submit" value="login">
     </form>

     <?php
      if(isset($_SESSION['uid'])){
        header("Location: home.php");
      }

      else{
        echo "please log in";
      }
      ?>
   </body>
 </html>
