<?php
$data=new mysqli("localhost","root","","task");
if($data->error)
{
echo $data->error;
}
else
{
$id = $_GET['task_id'];
$data1="DELETE FROM demo WHERE task_id = $id";
if($data->query($data1)===TRUE)
{
header("location:one.php");
}
else
{
echo $data->error;
}
}
?>