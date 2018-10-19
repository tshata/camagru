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
      <div style="margin-top: 15%">
      </div>
      <div class="row">
        <div class="twelve columns">
  
          <h1 style="text-align: center;">Camagru</h1>
        <!--  <img class="twelve columns" src="images/logo.png">  -->
        </div>
      </div>
     <div class="row">
     <div style="margin-top: 5%">
        <h4 style="text-align: center">Sign Up</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="six columns">
          <label style="text-align:center">Name</label>
          <input class="u-full-width" type="text" name="Name">
          </div>

          <div class="six columns">
          <label style="text-align:center">Email</label>
          <input class="u-full-width" type="email" name="email">
          </div>

          <div class="row">
          <div class="six columns">
          <label style="text-align: center;"> Password</label>
          <input class="u-full-width" type="password" name="">
          </div>
          
          <div class="six columns">
          <label style="text-align:center">Confirm Password</label>
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
<footer style="position: fixed; bottom: 0; "></footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
