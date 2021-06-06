<!DOCTYPE html>
<html lang="en-US">
<body style="background-color:white;">
  <head>
  <title>CSC 506 LOGIN</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <center>
  <h1>User Log In</h1>
<div class="input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <center><label>Email</label></center>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" required />
          </div>
		  <br>
          <div class="form-group">
            <center><label>Password</label></center>
            <input type="password" class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" required />
          </div>
		  <br>
			<br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:10em; margin:0;" /><br>
			<br>
	
            <center>
             <a href="register.php">Click here to register!</a>
           </center>
          </div>
          
        </form>
      </div>
	  </center>
      </html>
      <?php
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['id'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script>
    <?php
}
}
      ?>