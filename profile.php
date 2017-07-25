<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile : </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="shortcut icon" href="img/small-logo.png"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<?php include 'navigation.php'; ?>

  <div class="profile-section">
    <div class="container">
      <div class="profile-screen">
        <form method="POST">
           <div class="row">
              <div class="input-field col s3">
                <input id="first_name" type="text" class="validate" name="firstname" value="<?php echo $firstname;?>" required="required">
                <label class="active" for="first_name">First Name</label>
              </div>
            
              <div class="input-field col s3">
                <input id="lastname" type="text" class="validate" name="lastname" value="<?php echo $lastname;?>" required="required">
                <label class="active" for="Last_name">Last Name</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input id="contact" type="text" class="validate" name="mobile" value="<?php echo $mobile;?>" required="required">
                <label class="active" for="contact">Mobile No.</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="pass" value="<?php echo $passcode;?>" required="required">
                <label class="active" for="password">Password</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input id="confirm_password" type="password" class="validate" value="<?php echo $passcode;?>" required="required">
                <label class="active" for="confirm_password">Re-Type Password</label>
              </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action" id="update">Register
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
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#update').click(function() {
        $.ajax({
          url: "updateprofile.php",
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