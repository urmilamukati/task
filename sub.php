<?php
$category=$_POST['category'];
$work=$_POST['work'];
$when=$_POST['when'];
$date=$_POST['date'];
$day=$_POST['day'];
$data= new mysqli ("localhost","root","","task");
if($data->error)
{
echo $data->error;
}
else
{
$database = "INSERT INTO demo (categories,work,when1,date1,day1)VALUES('$category','$work','$when','$date','$day')";
if($data->query($database)===TRUE)
{
	header("location:one.php");
}
else
{
	echo $data->error;
}
}
?>