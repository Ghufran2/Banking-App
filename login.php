<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #82E0AA;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $usertype=$_POST['to'];
    
    $sql="select * from users where email='".$email."' and password='".$pass."' and utype='".$usertype."'";
    $result=mysqli_query($conn,$sql);
    // echo $pass. " ".$email." ".$usertype;
    if($result){
      // echo "IF";
      session_start();
      while($rows = mysqli_fetch_assoc($result)) {
        // print_r($rows);
      $_SESSION["name"] = $rows['name'];
      $_SESSION["email"] = $rows['email'];
      $_SESSION["user"] = $rows['utype'];
      // echo "SESSIONS - ".$_SESSION["user"]." - ".$_SESSION["name"]." - ".$_SESSION["email"];
      
    }
    
               echo "<script> alert('Hello! Logged in successfully.');
                               window.location='index.php';
                     </script>";
                    
    }
    else
    {
      // echo "ELSE";
      
      echo "<script> alert('Alert! Invalid credentials.');
                               window.location='login.php';
                     </script>";
    }
  }
 ?> 

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color : black;">Login</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">

            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Password" type="password" name="pass" required>
            </div>
            <br>
            <label style="color : black;"><b>Login as:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <option class="table" value="Admin" >Admin</option>
              <option class="table" value="User" >User</option>
            <div>
        </select>
        <br>
        <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="LOGIN" name="submit"></input>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>