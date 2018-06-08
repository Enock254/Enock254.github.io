<?php
		$maths=0;
		$english=0;
		$kiswahili=0;
		$physics=0;
		$chemistry=0;
		$biology=0;
		$geography=0;

		$maths=$_POST["maths"];
		$english=$_POST["English"];
		$kiswahili=$_POST["Kiswahili"];
		$physics=$_POST["Physics"];
		$chemistry=$_POST["Chemistry"];
		$biology=$_POST["Biology"];
		$geography=$_POST["geography"];
		$meangrade=($maths+$english+$kiswahili+$physics+$chemistry+$biology+$geography)/7;
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>REPORT FORM</title>
	<style type="text/css">
	body{
		background-color: gray;
	}
	table,th,td{
			background-color: gray;
			color: white;
			border: 2px solid black;
			padding: 4px;
			
		}
		table{
			width: 100%;
			border-collapse: collapse;

	</style>
</head>
<body>
<img src="school.jpg">
<table>
	<tr>
		<th>Subject</th>
		<th>Marks</th>
	</tr>
	<tr>
		<td>Maths</td>
		<td><?php echo "$maths";?></td>
	</tr>
	<tr>
		<td>English</td>
		<td><?php echo "$english";?></td>
	</tr>
	<tr>
		<td>Kiswahili</td>
		<td><?php echo "$kiswahili";?></td>
	</tr>
	<tr>
		<td>Physics</td>
		<td><?php echo "$physics";?></td>
	</tr>
	<tr>
		<td>Chemistry</td>
		<td><?php echo "$chemistry";?></td>
	</tr>
	<tr>
		<td>Biology</td>
		<td><?php echo "$biology";?></td>
	</tr>
	<tr>
		<td>Geography</td>
		<td><?php echo "$geography";?></td>
	</tr>
	<tr>
		<td>Mean Grade</td>
		<td><?php echo "$meangrade";?></td>
	</tr>
</table>
</body>
</html>