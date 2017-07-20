<?php
   include("db.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass']; 
      
      $query = "SELECT userid FROM userinfo WHERE mobile = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['userid'];
      $count = mysqli_num_rows($result);
   
      if($count == 1) {
         $_SESSION['session_userid'] = $active;
         header('location: dashboard.php');
      }else {
        $message = "Your Login Name or Password is invalid";
      }
   }
?>