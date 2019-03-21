<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Aadhar Number</label>
  	  <input type="text" name="aadhar">
  	</div>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" name="phno" value="<?php echo $phno; ?>">
    </div>
    <div class="input-group">
      <label>Locality</label>
      <input type="text" name="address" value="<?php echo $address; ?>">
    </div></br>
      <label>Date of Birth</label>
       <input type="date" name="dob">
      <label>Gender</label>
       <select name="gender">
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>

       </select>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>