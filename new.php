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
		//we can now calculate the BMI
		$meangrade=($maths+$english+$kiswahili+$physics+$chemistry+$biology+$geography)/7;

		if($maths<30) {
		# code...
		echo "E";
		}
		elseif ($maths<50) {
		# code...
		echo "D";
		}
		elseif ($maths<60) {
		# code...
		echo "C";
		}
		elseif ($maths<70) {
		# code...
		echo "B";
	}
		elseif ($maths<100) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";
		if($english<30) {
		# code...
		echo "E";
		}
		elseif ($english<50) {
		# code...
		echo "D";
		}
		elseif ($english<60) {
		# code...
		echo "C";
		}
		elseif ($english<70) {
		# code...
		echo "B";
	}
		elseif ($english<100) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";

		if($kiswahili<30) {
		# code...
		echo "E";
		}
		elseif ($kiswahili<50) {
		# code...
		echo "D";
		}
		elseif ($kiswahili<60) {
		# code...
		echo "C";
		}
		elseif ($kiswahili<70) {
		# code...
		echo "B";
	}
		elseif ($kiswahili<80) {
		# code...
		echo "A";
	}
		else{
		echo "X";
		}
		echo "<br>";

		if($physics<30) {
		# code...
		echo "E";
		}
		elseif ($physics<50 && $physics>40) {
		# code...
		echo "D";
		}
		elseif ($physics<60) {
		# code...
		echo "C";
		}
		elseif ($physics<70) {
		# code...
		echo "B";
	}
		elseif ($physics<80) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";
		if($chemistry<30) {
		# code...
		echo "E";
		}
		elseif ($chemistry<50) {
		# code...
		echo "D";
		}
		elseif ($chemistry<60) {
		# code...
		echo "C";
		}
		elseif ($chemistry<70) {
		# code...
		echo "B";
	}
		elseif ($chemistry<80) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";
		if($biology<30) {
		# code...
		echo "E";
		}
		elseif ($biology<50) {
		# code...
		echo "D";
		}
		elseif ($biology<60) {
		# code...
		echo "C";
		}
		elseif ($biology<70) {
		# code...
		echo "B";
	}
		elseif ($biology<100) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
		echo "<br>";

		if($geography<30) {
		# code...
		echo "E";
		}
		elseif ($geography<50) {
		# code...
		echo "D";
		}
		elseif ($geography<60) {
		# code...
		echo "C";
		}
		elseif ($geography<70) {
		# code...
		echo "B";
	}
		elseif ($geography<80) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";

		if($meangrade<30) {
		# code...
		echo "E";
		}
		elseif ($meangrade<50) {
		# code...
		echo "D";
		}
		elseif ($meangrade<60) {
		# code...
		echo "C";
		}
		elseif ($meangrade<70) {
		# code...
		echo "B";
	}
		elseif ($meangrade<100) {
		# code...
		echo "A";
	}
		else{
		echo "X";
	}
	echo "<br>";
?>
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Subject</th>
		<th>Marks</th>
		<th>Grade</th>
	</tr>
	<tr>
		<td>Mathematics</td>
		<td><php echo"$maths"></td>
		<td>A</td>
	</tr>
	<tr>
		<td>English</td>
		<td><php echo"English"></td>
		<td>A</td>
	</tr>
</table>
</body>
</html>



