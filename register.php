<!DOCTYPE html>
<html>
<head>
	<title>Register | Sybmi Share </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="shortcut icon" href="img/small-logo.png"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <?php include 'navigation.php';?>
	  <div class="register-section">
      <div class="container">
        <div class="signup-screen">
          <h1>SIGNUP</h1>
          <form method="POST">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="firstname" required="required">
                <label class="active" for="first_name">First Name</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input id="lastname" type="text" class="validate" name="lastname" required="required">
                <label class="active" for="Last_name">Last Name</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input id="contact" type="text" class="validate" name="mobile" required="required">
                <label class="active" for="contact">Mobile No.</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="pass" required="required">
                <label class="active" for="password">Password</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input id="confirm_password" type="password" class="validate" required="required">
                <label class="active" for="confirm_password">Re-Type Password</label>
              </div>
            </div>

            <p style="float: left">Already a member? <a href="index.php">Sign In now.</a></p>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="register">Register
              <i class="material-icons right">send</i>
            </button>
          </form> 
        </div>
      </div>
     </div> 
    <?php include 'footer.php';?>   
</body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#register').click(function() {
        $.ajax({
          url: "registerUser.php",
          method: "POST",
          data: $('form').serialize(),
          dataType: "text",
          success: function(strmessage) {
            $('#message').text(strmessage)  
          } 
        })
      })
    })
</script>

</html>