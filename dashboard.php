
<!DOCTYPE html>
<html>
<head>
	<title>DashBoard : </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<?php include 'navigation.php'; ?>

  <div class="fixed-action-btn">
      <!-- Modal Trigger -->
      <a class="btn-floating btn-large waves-effect waves-light red" href="#modal"><i class="material-icons">add</i>
      </a>
  </div>

  <!-- Modal Structure -->
  <div id="modal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Add Post</h4>
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
          </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Post</a>
    </div>
  </div> 
<input type="" name="">
<select>
  <option>w</option>
  <option>y</option>
</select>
  <?php include 'footer.php';?>














</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">// Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();

</script>
</html>

