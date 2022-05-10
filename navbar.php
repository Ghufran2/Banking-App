

<!-- navbar --> 
      <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="index.php" style="color : #C0392B;"><b>INDIAN BANK</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

 <?php 
  session_start();
  $login = "";
  if(isset($_SESSION['name']))
  {
    $login = "YES";
  }
  else
  {
    $login = "NO";
  }
  
    ?> 
          <?php 
            if($login == 'NO')
            {

            

              ?> 
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color : #C0392B;"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createuser.php" style="color : #C0392B;"><b>Register</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" style="color : #C0392B;"><b>Login</b></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="transfermoney.php" style="color : #C0392B;"><b>Transfer Money</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="color : #C0392B;"><b>Transaction History</b></a>
              </li> -->
            
               <?php
               }

               else
               {

                  if($_SESSION['user'] == 'Admin')
                  {
                    ?>
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color : #C0392B;"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allusers.php" style="color : #C0392B;"><b>Users</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="color : #C0392B;"><b>Transaction History</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blockhistory.php" style="color : #C0392B;"><b>Block Transactions</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color : #C0392B;"><b>Logout</b></a>
              </li>
              </ul>
              <?php
                  }
                  else
                  {
                    ?>
                    <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color : #C0392B;"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php" style="color : #C0392B;"><b>Transfer Money</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="color : #C0392B;"><b>Transaction History</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color : #C0392B;"><b>Logout</b></a>
              </li>
              </ul>
              <?php
                  }

               ?>
              
              
                <?php
              }
              ?>
            
          </div>
       </nav>