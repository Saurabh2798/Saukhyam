<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "hoi";
// Check connection
$id=$_GET['adminId'];
$pass=$_GET['adminpassword'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admindata WHERE id='".$id."' AND password='".$pass."'";
echo $sql;
 $numrows=mysqli_num_rows($sql);
    if($numrows!=0)  
    { 
    echo "hi";   
    while($row=mysqli_fetch_assoc($sql))  
    {  
    $dbid=$row['id'];  
    $dbpassword=$row['password'];  
    echo $dbid;
    echo $dbpassword;
    }
if($id == $dbid && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$id;  
  
    /* Redirect browser */  
    header("Location: admin.php");  
    } else {  
    echo "Invalid username or password!";  
    }  
}

mysqli_close($conn);
?>




<div class="main-menubar d-flex align-items-center">
                                <nav class="hide">
                                    <a href="#home">Home</a>
                                    <a href="#service">Services</a>
                                    <!-- <a href="#appoinment">User signup</a> -->
                                    <a><button data-toggle="modal" data-target="#adminModal" class="qwerty" style="border: none; border-color: #fff; border-width: 0px;">ADMIN</button></a>
                                    <a href="user.php">View Records</a>
                                    <a href="#governance">City Insights</a>
                                </nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>


                            <form method="GET" action = "admin.php">  
  Id: <input type="text" name="adminId" autocomplete="off">
  <br><br>
  Password: <input type="password" name="adminpassword" autocomplete="off">
  <br><br>
  <input type="submit"/>  
</form>
