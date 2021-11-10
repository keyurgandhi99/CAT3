 <?php
include 'config.php';

$x1=$_GET["idd"];
$sql = "DELETE FROM stuinfo WHERE Stu_id=$x1";

if ($conn->query($sql) === TRUE) {
    header('Location: alldiscover.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 






