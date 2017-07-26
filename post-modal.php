 <div class="container">
    <!-- Modal Structure -->
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <h4>Add </h4>
            <form method="POST" action="ride-post.php">            
            <div class="row">
              <div class="input-field col s6">
                <select name="from" required="required">
                  <option value="" disabled selected>Choose your option</option>
                  <?php 
                      $from_query = "SELECT * FROM location";
                      $result = $conn->query($from_query);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              ?><option value="<?php echo $row["location_id"]?>"><?php echo  $row["name"];?></option> 
                          <?php }
                      } else {
                          echo "Error";
                      }
                  ?> 
                </select>
                <label>From</label>
              </div>

              <div class="input-field col s6" required="required">
                <select name="to">
                  <option value="" disabled selected>Choose your option</option>
                  <?php 
                      $from_query = "SELECT * FROM location";
                      $result = $conn->query($from_query);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              ?><option value="<?php echo $row["location_id"]?>"><?php echo  $row["name"];?></option> 
                          <?php }
                      } else {
                          echo "Error";
                      }
                  ?> 
                </select>
                <label>To</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="date" class="datepicker" name="date"  required="required">
                <label>Date</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="timepicker" name="time"  required="required">
                <label>Time</label>
              </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                  <select name="vtype" required>
                      <option>2 wheeler</option>
                      <option>4 Wheeler</option>
                  </select>
                  <label>Vechile Type</label>
                </div>
            
                <div class="input-field col s6">
                  <select name="capacity" required>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
                  <label>Capacity</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" data-length="120" name="add-info"></textarea>
                <label for="textarea1">Addition Information (optional)</label>
              </div>
            </div>
             
            <button class="btn waves-effect waves-light" type="submit" name="action" id="register">Post<i class="material-icons right">send</i></button>

          </form> 
        </div>
        <!--div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
        </div-->
    </div>
  </div>