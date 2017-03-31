<?php
  session_start();

 ?>
 <!DOCTYPE html>
 <html >
 <head>
   <meta charset="UTF-8">
   <title>Login</title>
   <link rel="stylesheet" href="css/style.css">
 </head>

 <body>
   <div class="wrapper">
   	 <div class="container">
     	 <h1>Welcome</h1>
     	 <form class="form" action="includes\login.inc.php" method="post">
     	   <input type="text" name="uid" placeholder="Username">
     	   <input type="password" name="pwd" placeholder="Password">
     	   <button type="submit" id="login-button">Login</button>
     	 </form>
   	</div>
    <?php


      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

      if(strpos($url, 'error=wrpwd') != false){
        echo "you entered a wrong password";
      }
      else{
        if(isset($_SESSION['uid'])){
          header("Location: home.php");
        }
      }
     ?>
   	<ul class="bg-bubbles">
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   		<li></li>
   	</ul>
  </div>
  </form>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src="js/index.js"></script>
   </body>
 </html>
