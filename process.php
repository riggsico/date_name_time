<?php
$host="localhost";
$username="root";
$password="";
$users="try";

$conn=new mysqli($host,$username,$password,$users);

if ($conn->connect_error)
{
    echo(" Connection failed" . $conn->connect_error);

}


$date=mysqli_real_escape_string($conn,$_POST['date']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$time=mysqli_real_escape_string($conn,$_POST['time']);

$sql="INSERT INTO tbl_time_name_date (date,name,time ) value  ('$date','$name','$time')";

if($conn->query($sql))
{
    echo "save";

}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>