<?php
session_start();
$url="C:\wamp\www\web\123.jpg"
?>

<!DOCTYPE html>
     <html>
     <head>
          <link rel="stylesheet" type="text/css" href="style.css">
    </head>
     <body>
     <header>
          <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Login Here</h1>
     <?php
     if(isset($_SESSION['Uname']))
     {
          echo '<form action="logout.php" method="POST">
         ';
     }else{
       echo '  <p>Username</p><form action = "include/login.in.php" method="POST">
          <input type="text" name="Uname" placeholder="Enter Username/Emailid">
          <p>Password</p>
          <input type="password" name="pwd" placeholder="Enter Password">
          <input type="submit" name="login" value="Login">LOGIN</button>
          </form>
     </ul>

          <a href ="signup.php">Dont have an account?</a>';
     }
      ?>

    </div>
     </header>
     </body>
     </html>
