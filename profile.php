<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>CSC 506 PROFILE</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM users where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <center>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Change Fields to Update</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label><br>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your new Fullname" value="<?php echo $row['name']; ?>" required />
          </div><br>
		  
          <div class="form-group">
            <label>Address</label><br>
            <input type="text" class="form-control" name="address" style="width:20em;" placeholder="Enter your new address" required value="<?php echo $row['address']; ?>" />
          </div><br>
          <div class="form-group">
            <label>E-mail</label><br>
            <input type="email" class="form-control" name="email" style="width:20em;" placeholder="Enter your new email" value="<?php echo $row['email']; ?>">
          </div><br>
          <div class="form-group">
            <label>Phone</label><br>
            <input type="number" class="form-control" name="phone" style="width:20em;" required placeholder="Enter your new phone number" value="<?php echo $row['phone']; ?>">
            </div><br>
          <div class="form-group">
            <label>Password</label><br>
            <input type="password" class="form-control" name="password" style="width:20em;" required placeholder="set your password" value="<?php echo $row['password']; ?>">
          </textarea>
          </div><br>
		  
		  <div id="content">
 
        <form method="POST"
              action=""
              enctype="multipart/form-data">
            <input type="file"
                   name="uploadfile"
                   value="" />
				   <br>
				   <br>
 
		  
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:10em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Click here to Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
    <?php
      if(isset($_POST['submit']))
      {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
		$photo = $_POST['photo'];
      $query = "UPDATE users SET name = '$name',
                      address = '$address', email = '$email', phone = $phone
                      WHERE id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
       
		
		
		
		</script>
        <?php
             }               
?>