<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>DashBoard : </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="shortcut icon" href="img/small-logo.png"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
	
	<?php include 'navigation.php'; ?>
  <div class="display-post">
    <?php include 'viewpost.php'; ?>
  </div>
  <?php include 'post-modal.php';?>  
  <div class="fixed-action-btn">
      <!-- Modal Trigger -->
      <a class="btn-floating btn-large waves-effect waves-light red pulse modal-trigger" data-target="login-modal"><i class="material-icons">add</i>
      </a>
  </div>
  
  

  <?php include 'footer.php';?>

</body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/main.js"></script>
</html>