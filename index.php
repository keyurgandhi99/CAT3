<?php

include 'header.php';

?>

<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Total Students 
        </h4>
        <h2 class="mb-5">
          <?php
          include 'config.php';
          $sql="Select count(Stu_id) from stuinfo";
          $result=$conn->query($sql);
          if ($result-> num_rows > 0) {
           while ($row = $result-> fetch_assoc()) {
            echo $row['count(Stu_id)'];
            
          }
        } 
        
        ?>




      </h2>
      
    </div>
  </div>
</div>
<div class="col-md-4 stretch-card grid-margin">
  <div class="card bg-gradient-info card-img-holder text-white">
    <div class="card-body">
      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
      <h4 class="font-weight-normal mb-3">Total MSC
      </h4>
      <h2 class="mb-5">
        
       <?php
       
       $sql="Select count(Stu_id) from stuinfo where course='msc'";
       $result=$conn->query($sql);
       if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          echo $row['count(Stu_id)'];
          
        }
      } 
      
      ?>
    </h2>
    
  </div>
</div>
</div>
<div class="col-md-4 stretch-card grid-margin">
  <div class="card bg-gradient-success card-img-holder text-white">
    <div class="card-body">
      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
      <h4 class="font-weight-normal mb-3">Total MCA 
      </h4>
      <h2 class="mb-5">
       <?php
       
        $sql="Select count(Stu_id) from stuinfo where course='mca'";
       $result=$conn->query($sql);
       if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          echo $row['count(Stu_id)'];
          
        }
      } 
      
      ?>
    </h2>
    
  </div>
</div>  
</div>


</div>




<?php

include 'footer.html';

?>

