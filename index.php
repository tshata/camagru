<?php

$servername = "localhost";
$username = "root";
$password = "Lw7en3xBSylH3KN1";

//create connection

$connection = new mysqli($servername, $username, $password);

//check connection

if ($connection->connect_error)
{
  die("Connection failed: " .$connection->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Camagru</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div style="margin-top: 5%">
        <h4>Sign In</h4>
        <form>
          <div class="six columns">
          <label>Email</label>
          <input class="u-full-width" type="text" value="email">
        </div>
        
           <div class="six columns">
          <label >Password</label>
          <input class="u-full-width" type="password">
        </div>
        

          <input class="u-full-width" type="submit" value="Sign In">
        </form>

        <?php
session_start();

              $Name=$_POST['email'];
              $password=$_POST['password'];

              $result=mysql_query("SELECT count(*) FROM User WHERE email='email' and password='password' ");

              $count=mysql_fetch_array($result);

              if(count==0)
              {
                session_register("email");
                session_register("password");
              //  header("location:success.php");
              }
              else
              {
                Wrong username or password Return to <a href="index.php">login</a>; 
              }
              
          }
        ?>
      </div>
      <div class="row">
        <div class="twelve columns">
  
          <img class="twelve columns" src="images/logo.png">
        </div>
      </div>
     <div class="row">
     <div style="margin-top: 5%">
        <h4>Sign Up</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="six columns">
          <label>Full Name</label>
          <input class="u-full-width" type="text" name="Name">
          </div>

          <div class="six columns">
          <label>Email</label>
          <input class="u-full-width" type="email" name="email">
          </div>

          <div class="row">
          <div class="six columns">
          <label> Password</label>
          <input class="u-full-width" type="password" name="">
          </div>
          
          <div class="six columns">
          <label>Confirm Password</label>
          <input class="u-full-width" type="password" name="">
          </div>
          </div>
        
          
          <input  class="u-full-width" type="submit" value="Sign Up">
      
      </div>
        </form>
      </div>
    </div>
        </div>
  </div>
<footer></footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>