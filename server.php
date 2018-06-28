<?php

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');

// sign in lecturer
if (isset($_POST['login_user'])) {
    // receive all input values from the form
    $studentsname = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($studentsname)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM school WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $lecturers_check_query);
  $lecturers = mysqli_fetch_assoc($result);
  
  if ($lecturers) { // if user exists
    if ($lecturers['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($lecturers['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO students (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: register.php');
  }
}
    if (isset($_POST['reg_user1'])) {
        // receive all input values from the form
        $studentsname = mysqli_real_escape_string($db, $_POST['studentsname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $score = mysqli_real_escape_string($db, $_POST['score']);
        $query = "INSERT INTO students (studentsname, email, score) 
  			  VALUES('$studentsname', '$email', '$score')";
        mysqli_query($db, $query);
        $_SESSION['studentsname'] = $studentsname;
        $_SESSION['success'] = "results posted";
        header('location: register.php');
    }
    if (count($errors) == 0) {
        $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['studentsname'] = $studentsname;
            $_SESSION['success'] = "You are now logged in";
            header('location: register.php');
        }
        else {
            array_push($errors, "Wrong username/password combination");
        }

    }
