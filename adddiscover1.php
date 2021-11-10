<?php
include 'config.php';

$name=$_POST['name'];
$reg=$_POST['reg'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$address=$_POST['address'];

$query="INSERT INTO stuinfo(Stu_id, Stu_name, age, gender,course,address,reg_no)  VALUES ('', '$name','$age','$gender','$course','$address','$reg')";

if (mysqli_query($conn, $query)) {
	header('Location: alldiscover.php');
} else
{
	echo "Error: " . $query . "
	" . mysqli_error($conn);
}	


mysqli_close($conn); 
?>  

?>