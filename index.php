<!DOCTYPE html>
<html>
<head>
	<title>Login :</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <div class="nav-section">
    <a href="index.php">Share #Ride</a>
  </div>
  
  <div class="login-section">
    <div class="container">
      <div class="login-screen">
        <h1>SIGN IN</h1>
        <form method="POST" action="loginUser.php">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">stay_primary_portrait</i>
              <input id="username" type="text" class="validate" name="username" required="required">
              <label class="active" for="username">Mobile No.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="password" type="password" class="validate" name="pass" required="required">
              <label class="active" for="password">Password</label>
            </div>
          </div>    
          <p style="float: left">Not a member? <a href="register.php">Sign up now.</a></p>
          <button class="btn waves-effect waves-light" type="submit" name="action">Login
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
  </div>       

	<?php include 'footer.php'; ?>
</body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>