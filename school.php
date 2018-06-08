<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <style type="text/css">
  input[type=text]{
      width: 30%;
      border-radius: 6px;
      color: red;
}
 input[type=number]{
      width: 30%;
      border-radius: 6px;
      color: red;
}
form {
  background-color: gray;
}
#red{
  color: red;
  font-family: Chiller;
}
  </style>
</head>
<body>
<div id="red">
<h1>STUDENTS PERFORMANCE</h1>
<div>
	<form action="arety.php" method="POST">
    <h3>Admission Number</h3><br>
    <input type="number" name="admission number" required=""placeholder="Enter your admission number" maxlength="3">
    <br>
  	<h3>Maths</h3><br>
  	<input type="number" name="maths" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	<h3>English</h3><br>
  	<input type="number" name="English" required=""placeholder="Enter your english score" maxlength="3">	
  	<br>
  	<h3>Kiswahili</h3><br>
  	<input type="number" name="Kiswahili" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	<h3>Physics</h3><br>
  	<input type="number" name="Physics" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	<h3>Chemistry</h3><br>
  	<input type="number" name="Chemistry" required=""placeholder="Enter your chemistry score" maxlength="3">
  	<br>
  	<h3>Biology</h3><br>
  	<input type="number" name="Biology" required=""placeholder="Enter your biology score" maxlength="3">
  	<br>
  	<h3>Geography</h3><br>
  	<input type="number" name="geography" required=""placeholder="Enter your Geography score" maxlength="3">
  	<br>
    <input type="submit" class="btn btn-success" value="Calculate your grades"><input type="reset" class="btn btn-danger" 
    value="reset">
    </form>
</body>
</html>