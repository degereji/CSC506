<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>CSC 506 REG.</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <center>
  <h1>Register</h1>
<div class="reg-input-field">
        <h3>Fill-out All Fields to Register</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label><br>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Fullname" required />
          </div><br>
          <div class="form-group">
            <label>Address</label><br>
            <input type="text" class="form-control" name="address" style="width:20em;" placeholder="Enter your address" required pattern="[a-zA-Z .]+" />
          </div><br>
          <div class="form-group">
            <label>E-mail</label><br>
            <input type="email" class="form-control" name="email" style="width:20em;" placeholder="Enter your email">
          </div><br>
          <div class="form-group">
            <label>Phone Number</label><br>
            <input type="number" class="form-control" name="phone" style="width:20em;" required placeholder="Enter your phone">
          </textarea>
          </div><br>
            <label>Password</label><br>
            <input type="Password" class="form-control" name="password" style="width:20em;" required  placeholder="Enter your Password">
          </div><br>
		  
		  
		  
		  
		  
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:10em; margin:0;" /><br><br>
             <center>
             <a href="index.php">Already have an account? Login!</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      include 'connection.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


  $query = "INSERT INTO users
                (password,name,address,email,phone)
                VALUES ('".$password."','".$name."','".$address."','".$email."','".$phone."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Registered Successfully.");
            window.location = "index.php";
        </script>
                <?php
}
      ?>