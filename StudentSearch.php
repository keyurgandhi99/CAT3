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
<table class="table table-bordered">
          <thead>
            <tr>
              <th> Student Id </th>
              <th> Student Name </th>
              <th> Age </th>
              <th> Gender</th>
              <th> Course</th>
              <th> Address</th>
            </tr>
          </thead>
          <tbody>
           

<?php
include 'config.php';
$search_value=$_POST["searchData"];
$sql="select * from stuinfo where course like '%$search_value%'";
$result=$conn->query($sql);

            if ($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {


                echo "<tr>";
                echo "<td>". $row["reg_no"]."</td>";
                echo "<td>". $row["Stu_name"]."</td>";
                echo"<td> ". $row["age"]." </td>";
                echo "<td> ". $row["gender"]." </td>";
                echo "<td> ". $row["course"]." </td>";
                echo "<td> ". $row["address"]." </td>";
               
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
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
</body>
</html>