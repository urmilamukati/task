<html>
<head>

</head>
<pre>
<?php
echo "<form action = 'update1.php?id=".$_GET['task_id']."' method = 'post' >";
?>
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Select </td>
    <td width="329"><select name="category" id="category">
  <option value="businness">business</option>
  <option value="job">job</option>
  <option value="Full time">full time</option>
  <option value="Part time">part time</option>
</select></td>
  </tr>
  <tr>
    <td>what You Have to do?</td>
    <td><input type="text" name = "work" id="work" required=""><br></td>
  </tr>
  
  <tr>
    <td>Where ?</td>
    <td><input type="text" name = "when" id="when" required=""><br></td>
  </tr>
  <tr>
    <td>When ?</td>
    <td><input type="text" name = "date" id="date" required=""><br></td>
  </tr>
  <tr>
    <td>Day</td>
    <td> <label for="day">All day</label><input type="radio" id="day" name="day" value="All day"></td>
  </tr>
 <tr>
    <td colspan="2" align="center">
	<input type="submit" name="sub" value="submit"/></td>
  </tr>
</table>
</form>
</html>