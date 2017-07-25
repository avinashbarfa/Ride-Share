
<link rel="stylesheet" type="text/css" href="css/style.css">
  

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Share Ride</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light" href="profile.php">Profile</a></li>
        <li><a class="waves-effect waves-light" href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="img/syncfade.jpg">
            </div>
            <a href="#!user"><img class="circle" src="img/avi.jpg"></a>
            <a href="#!name"><span class="white-text name"><?php echo $firstname .' '. $lastname;?></span></a>
            <a href="#!email"><span class="white-text email"><?php echo $mobile;?></span></a>
          </div>
        </li>
        <li>
          <a class="waves-effect waves-light" href="profile.php"><i class="material-icons">perm_identity</i>Profile</a>
        </li>
        <li>
          <a class="waves-effect waves-light" href="logout.php"><i class="material-icons">input</i>Logout</a>
        </li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  