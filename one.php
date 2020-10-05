<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
</head>
<body>
<form action="two.php" method="GET">
<h1> Hi</h1><br>
<h3>Nothing to do yet?think about it lets start!</h3>
<a href="two.php">Add Task</a>
</form>
<?php $data= new mysqli("localhost","root","","task");
if($data->error)
{
	echo $data->error;
}
else
{
	$data1="SELECT * FROM demo ";
	echo "<table border=2px solid;><tr><th >id</th>
     <th>categories</th><th>work</th><th>when</th><th>date</th><th>day</th><th>delete</th><th>update</th></tr>";
	$result=$data->query($data1);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
	{	echo "<tr><td>".$row[0]."</td>
<td > ".$row[1]." </td>
<td>".$row[2]." </td>
<td>".$row[3]." </td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td><a href ='delete.php?task_id= $row[task_id]'>Delete</a></td>
<td><a href= 'update.php?task_id=$row[task_id]'>Update</a></td></tr>";
	}
		
	}
}
?>
</body>
</html>