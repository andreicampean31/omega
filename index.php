<?php
  session_start();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>login</title>
     <link rel="stylesheet" href="loginstyle.css">
   </head>
   <body>
     <form class="login" action="login.inc.php" method="post">
       <input type="text" name="uid" placeholder="username">
       <br>
       <input type="password" name="pwd" placeholder="password">
       <br>
       <input type="submit" value="login">
     </form>

     <?php
      if(isset($_SESSION['uid'])){
        header("Location: home.php");
      }

      else{
        echo "<p class='please_login'>please log in</p>";
      }
      ?>
   </body>
 </html>
