 <?php
include 'config.php';

$x1=$_GET["idd"];
$name=$_POST['name'];
$reg=$_POST['reg'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$address=$_POST['address'];

$sql = "UPDATE stuinfo 
set 
Stu_name='$name', 
age='$age',
gender='$gender',
course='$course',
address='$address',
reg_no ='$reg', 
where reg_no='$x1'
";

if ($conn->query($sql) === TRUE) {
    header('Location: alldiscover.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 






