<?php
   
    $post_query = "SELECT * FROM rideinfo";
    $post_result = mysqli_query($conn, $post_query);
    $count = mysqli_num_rows($post_result);
    if ($post_result->num_rows > 0) 
    {
      while($row = $post_result->fetch_assoc()) 
      {
         $post_id = $row["rideinfo_id"];
         $from = $row["from_id"];
         $to = $row["to_id"];
         $userid = $row["userid"];
         $d_date = $row["pdate"];
         $d_time = $row["ptime"];
         $additional = $row["additional_details"];   
          

          $location_query = "SELECT name FROM location WHERE location_id = $from";
          $location_result = $conn->query($location_query);
          if ($location_result->num_rows > 0) {
            while($row = $location_result->fetch_assoc()) {
                $from = $row["name"];      
            }
          }
          
          $location_query = "SELECT name FROM location WHERE location_id = $to";
          $location_result = $conn->query($location_query);
          if ($location_result->num_rows > 0) {
            while($row = $location_result->fetch_assoc()) {
                $to = $row["name"];      
            }
          }

          $userinfo_query = "SELECT * FROM userinfo where userid= $userid";
          $result = $conn->query($userinfo_query);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $name = $row['first_name'].' '.$row['last_name'];
                  $mobile = $row['mobile']; 
              }
          }
          ?>
          <div class="card">
            <div class="card-content">
              <img class="circle" src="img/avi.jpg">
              <span class="card-title activator"><?php echo $name?><i class="material-icons right">more_vert</i></span>
              <span>Trip : <?php echo $from." To ".$to?></span>
              <p>Depature : <?php echo  $d_date.' '.$d_time;?></p>
              <p style="padding-top: 10px;"><a href="tel:<?php echo $mobile?>"><i class="material-icons">local_phone</i></a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?php echo $name?>
                <i class="material-icons right">close</i>
                <?php
                    if($userid == $session_id) {
                      ?>
                      <form class="delete-form" method="POST" action="deletepost.php">
                          <button class="delete-btn" name="post_id" value="<?php echo $post_id;?>"><i class="material-icons">delete</i></button>
                      </form> 
                     <?php 
                    }
                ?>
              </span>
              
              <h6>Contact : <a href="tel: <?php echo $mobile?>"><?php echo $mobile;?></a></h6>
              <h6>Additional Details :</h6><p class="additional"><?php echo $additional;?></p>
            </div>
          </div>
          
      <?php
      }    
    }
    else {
      echo "No record found";
    }   
?>