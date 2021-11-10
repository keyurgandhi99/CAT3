<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="img/fav.png" />
  <meta name="author" content="colorlib" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Christ University</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
  
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
  
     
          
            <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Enter Student Details</h4>
                    <br>
                    <br>
                    <form class="form-sample" action="updatestudent1.php?idd=$data1" method="post">
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" id="name"  required placeholder="Enter Your Title For Discover" />
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Reg No</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Register number " name="reg" required />
                            </div>
                          </div>
                        </div>

                    <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Age</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" placeholder="Enter age " name="age" required />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select gender</label>
                            <div class="col-sm-9">
                             <select name="gender" id="gender" class="form-control" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                          </select>
                            </div>
                          </div>
                        </div>

                <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Course</label>
                            <div class="col-sm-9">
                             <select name="course" id="course" class="form-control" >
                                <option value="msc">Msc</option>
                                <option value="mca">Mca</option>

                          </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter address " name="address" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                   

                    
              <div class="row">
                      <div class="col-md-12">
 <?php
            $data1=$_GET["idd"];
             include 'config.php';
          ?>
                       <a href='updatestudent.php?idd=$data1'>
                      <button type="button" name="submit" class="btn btn-gradient-primary mb-2">
                       Save</button></a>
                      <input type="reset" class="btn btn-gradient-primary mb-2">
                    </div>
                  </div>
                    </form>
                    <br>
                    <br>
                    <br>

 <?php
            $x1=$_GET["idd"];
           
            $sql="Select * from stuinfo where reg_no=$x1";
            $result=$conn->query($sql);

            if ($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {


                echo "<tr>";
                echo"<td>". $row["reg_no"]."</td>";
                echo "<br>";
                echo "<td>". $row["Stu_name"]."</td>";
                echo "<br>";
                echo"<td> ". $row["age"]." </td>";
                echo "<br>";
                echo "<td> ". $row["gender"]." </td>";
                echo "<br>";
                echo "<td> ". $row["course"]." </td>";
                echo "<br>";
                echo "<td> ". $row["address"]." </td>";
               echo "<br>";
                echo"</tr>";


              }
            }


            ?>
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
  
  
 