<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>School portal</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div class="site-content">
			<div class="container">
				<main class="main-content">
					<div class="content">
						<header class="site-header">
							<div class="header-type">
								<nav class="navbar navbar-inverse">
  					<div class="container fluid">
  					<div class="navbar-header">
  					<a href="" class="navbar-brand">Home</a>
  					</div>
      </div>
      <ul class="navbar-nav">
      </ul>
      </div>
    </nav>
					
						<form action="itep.php"method="POST">

							<div class="form-header">
								<h2>LOGIN</h2>
								<p>Please in the following details</p>
							</div>
							<div class="form-content">
								USERNAME<br><br>
								<input type="text" name="username" placeholder="UserName" required=""><br><br>
								PASSWORD<br><br>
								<input type="password" name="password" placeholder="Input password" required=""><br><br>
									<span class="select control">
										<select name="" id="choose course">
											<option>Class Form</option>
											<option value="#">1</option>
											<option value="#">2</option>
											<option value="#">3</option>
											<option value="#">4</option>
										</select>
						               
								</p>
					
									<p>
										<pre><a href="performance.html"><button>login as a parent</button>
										
									     <input type="submit" name="login_user" value="LOGIN AS LECTURER">
                                        </form>
                                        </form>

								</p>
								</span>
								</p>
								</div>
								</form>
							</div>
					</div>
				</main>

				<div class="graduates">
					<ul class="slides">
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="stude1.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">TerpGroup</h2>
									<ul class="student-info">
										<li>Graduation: <strong>2018</strong></li>
										<li>Course: <strong>Management</strong></li>
										<li>Current job: <strong>Micro System INC.</strong></li>
									</ul>

									<p>The above class graduated and were able to develop a software in programming which won several awards.</p>
								</div>
								
							</div>
						</li>
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="stude2.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">Jeo Loop</h2>
									<p>The above african guy topped his classes and developed an application that was able to curb traffic in his country. </p>
								</div>
								
							</div>
						</li>
					</ul>
				</div>
					
					<p>Copyright &copy; 2018enock.  All rights reserved</p>

					<div class="social-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
				</footer>
				
			</div>

		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>