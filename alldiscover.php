<?php

include 'header.php';

?>



<div class="row">

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Students</h4>
        <br>
        <br>

<div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="StudentSearch.php" method="post">
            <div class="input-group">
              <input type="text" name="searchData" id="searchData" class="form-control bg-transparent border-1" placeholder="Search Here">
            </div>
            <button style="border:none;background: skyblue;width: 170px;height: 45px;">Search</button>
          </form>
        </div>
        <br>
        <br>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th> Student Id </th>
              <th> Student Name </th>
              <th> Age </th>
              <th> Gender</th>
              <th> Course</th>
              <th> Address</th>
              <th> Update</th>
              <th> Delete </th>

            </tr>
          </thead>
          <tbody>
            <?php
            include 'config.php';
            $sql="Select * from stuinfo";
            $result=$conn->query($sql);

            if ($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {


                echo "<tr>";
                echo"<td>". $row["reg_no"]."</td>";
                $abc=$row["reg_no"];
                echo "<td>". $row["Stu_name"]."</td>";
                echo"<td> ". $row["age"]." </td>";
                echo "<td> ". $row["gender"]." </td>";
                echo "<td> ". $row["course"]." </td>";
                echo "<td> ". $row["address"]." </td>";
                echo "<td><a href='updatestudent.php?idd=$abc'><i class='fa fa-edit'>Update</a></i></td>";
                echo "<td><a href='deletestudent.php?idd=$abc'><i class='fa fa-trash'>Delete</a></i></td>";
                echo"</tr>";


              }
            }


            ?>







          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>



</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- End custom js for this page -->
</body>
</html>