<?php
  include 'dbh.php';
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>home</title>
     <link rel="stylesheet" href="homestyle.css" type="text/css">
   </head>
   <body>
     <header>
       <div class="logout">
         <?php
           if(isset($_SESSION['uid'])){
             echo "You are logged in as " . $_SESSION['uid'];
             echo "<form class='' action='logout.inc.php' method='post'>
               <input type='submit' name='' value='logout'>
             </form>";
           }
           else{
             echo "You are not logged in and you can't see the content of this page.";
           }

          ?>

       </div>
     </header>
