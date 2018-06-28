<!DOCTYPE html>
<html>
<head>
	<title>Performance</title>
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
</style>
</head>
<body>
<h1>Performance</h1>
<form action="calco.php" method="POST">
<fieldset>
	<h3>Signup form</h3><br>
<p>Please fill in the form</p><br>
 <label>MATHEMATICS</label><br>
 <input type="number" name="math" maxlength="3"><br>
 <label>ENGLISH</label><br>
 <input type="number" name="eng" maxlength="3"><br>
 <label>KISWAHILI</label><br>
 <input type="number" name="swa" maxlength="3"><br>
 <label>BIOLOGY</label><br>
 <input type="number" name="bio" maxlength="3"><br>
 <label>CHEMISTRY</label><br>
 <input type="number" name="chem" maxlength="3"><br>
 <label>HISTORY</label><br>
 <input type="number" name="hist" maxlength="3"><br>
 <label>BUSINESS STUDIES</label><br>
 <input type="number" name="b/s" maxlength="3"><br>
 <input type="submit" class="btn btn-success" name="submit"><br>
 <input type="reset" class="btn btn-danger"name="reset"><br>
</fieldset>
</form>
</body>
</html>