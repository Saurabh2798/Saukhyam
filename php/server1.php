<?php
session_start();

// initializing variables
$aadhar = "";
$name    = "";
$phno    = "";
$address    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'user_registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $phno = mysqli_real_escape_string($db, $_POST['phno']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $dob=mysqli_real_escape_string($db, $_POST['dob']);
  $gender =     mysqli_real_escape_string($db, $_POST['gender']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($aadhar)) { array_push($errors, "Unique ID is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($phno)) { array_push($errors, "Phone Number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE aadhar='$aadhar' OR phno='$phno' LIMIT 1";
  $user_check_query;
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { // if user exists
    if ($user['aadhar'] === $aadhar) {
      array_push($errors, "This ID already exists");
    }

    if ($user['phno'] === $phno) {
      array_push($errors, "Phone Number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // $password = md5($password_1);//encrypt the password before saving in the database
    //echo "before".$password;
    $query = "INSERT INTO users (aadhar, name,phno, address, dob,gender, password) 
          VALUES('$aadhar', '$name', '$phno', '$address', '$dob','$gender' ,'$password_1')";
    mysqli_query($db, $query);
    $_SESSION['aadhar'] = $aadhar;
    $_SESSION['success'] = "You are now logged in";
    header('location: reg_index1.php');
    echo "Registraion successful, visit nearest hospital to get yourself a medwallet";
  }
}

 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($aadhar)) {
    array_push($errors, "Aadhar is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT aadhar, password FROM users WHERE aadhar='$aadhar' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['aadhar'] = $aadhar;
      $_SESSION['success'] = "You are now logged in";
      header('location: Multichain/index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

#modal in index.php
if (isset($_POST['admin_user'])) {
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($aadhar)) {
    array_push($errors, "Aadhar is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM adminlogin WHERE aadhar='$aadhar' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['aadhar'] = $aadhar;
      $_SESSION['success'] = "You are now logged in";
      header('location: admin.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


# admin.php
if (isset($_POST['admin_admin'])) {
  //echo "hi";
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $phone = mysqli_real_escape_string($db, $_POST['phno']);

  if (empty($aadhar)) {
    array_push($errors, "Aadhar is required");
  }
  if (empty($phone)) {
    array_push($errors, "Phone number is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT aadhar, phno FROM users WHERE aadhar='$aadhar' AND phno='$phone'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['aadhar'] = $aadhar;
      $_SESSION['success'] = "You are now logged in";
      header('location: Multichain/index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>