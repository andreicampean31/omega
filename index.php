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
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src="js/index.js"></script>

     <?php
      if(isset($_SESSION['uid'])){
        header("Location: home.php");
      }
    ?>
   </body>
 </html>
