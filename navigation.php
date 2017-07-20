<div class="nav-section">
  <a href="#" data-activates="slide-out" class="button-collapse" style="float: left"><i class="material-icons">menu</i></a>
    <div class="container">
      <div class="col-md-12">
        <h3>Share #RIde</h3>
      </div>
    </div>
  </div>

  <ul id="slide-out" class="side-nav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="img/login-background.jpg">
        </div>
        <a href="#!user"><img class="circle" src="img/avi.jpg"></a>
        <a href="#!name"><span class="white-text name"><?php echo $firstname .' '. $lastname;?></span></a>
        <a href="#!email"><span class="white-text number"><?php echo $mobile;?></span></a>
      </div>
    </li>
    <li><a class="waves-effect" href="profile.php"><i class="material-icons">perm_identity</i>Update Profile</a></li>
    <li><a class="waves-effect" href="logout.php"><i class="material-icons">input</i>Logout</a></li>
  </ul>
  