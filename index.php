<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  require_once('blockchain.php');
  
  
  //  echo "SESSIONS - ".$_SESSION["user"]." - ".$_SESSION["name"]." - ".$_SESSION["email"];
      
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>INDIAN BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
      <?php
  include 'config.php';
  // session_start();
  // echo "SESSIONS - ".$_SESSION["user"]." - ".$_SESSION["name"]." - ".$_SESSION["email"];
      
  ?>
  <?php 
            //total users
            $sql ="select count(*) from users where utype='User'";
            $User_query =mysqli_query($conn, $sql);
            $rowUsers=mysqli_fetch_array($User_query);

            //per day transactions
            
            $sql2 ="SELECT count(*) FROM `transaction` WHERE DATE(`datetime`) = CURDATE()";
            $day_trans_query =mysqli_query($conn, $sql2);
            $row_day_trans=mysqli_fetch_array($day_trans_query);

            //total transactions
            $sql1 ="select count(*) from transaction";
            $all_trans_query =mysqli_query($conn, $sql1);
            $row_all_trans=mysqli_fetch_array($all_trans_query);
            
            ?>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href=""><button style="background-color : #2785C4;">Total Users : <?php echo $rowUsers[0]; ?></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href=""><button style="background-color : #2785C4;">Per Day Transactions : <?php echo $row_day_trans[0]; ?></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href=""><button style="background-color : #2785C4;">Total Transactions : <?php echo $row_all_trans[0]; ?></button></a>
                  </div>
            </div>
      </div>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>