<?php
    $id=$_GET['id'];
	$category=$_POST['category'];
	$work=$_POST['work'];
	$when=$_POST['when'];
	$date=$_POST['date'];
	$day=$_POST['day'];
$data = new mysqli("localhost","root","","task");
if($data->error)
{
	echo $data->error;
}
else
{
	$dt ="UPDATE demo SET  categories ='$category', work ='$work',when1 ='$when',date1 ='$date' ,day1='$day' WHERE task_id = $id "  ;
	if($data->query($dt)===TRUE)
	{
		header("location:one.php");
	}
	else
	{
		echo $data->error ;
	}
}
?>