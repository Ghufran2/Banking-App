<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="style.css">

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<?php
  include 'navbar.php';
  include 'dao.php';

  // initializing the class
  $dao = new DAO();
            
?>
<body style="background-color : #000000;">

	
        <?php

            include 'config.php';
            $sql = "";
            if($_SESSION['user'] == 'Admin')
            {
                $sql ="select * from transaction order by sno desc";

            }
            else
            {
                $sql ="select * from transaction where sender='".$_SESSION['name']."'";

            }
            $jsondata = file_get_contents("chain.json");
              
            $arr_data = json_decode($jsondata, true);

            for($i = 1;$i < count($arr_data['chain']);$i++)
            {
                // echo 'ID - '.$arr_data['chain'][$i]['id']."\n";
                // echo 'ID - '.$arr_data['chain'][$i]['from']."\n";
                // echo 'ID - '.$arr_data['chain'][$i]['to']."\n";
            
            ?>
                
                <div id="slides">
                <ul class="roller">
                <li></li>
    
                </ul>
                </div>
            <ul id="steps" class="roller">
            <li><?php echo $arr_data['chain'][$i]['id'] ?></li>
            </ul>
            
            
            <?php
            }
           

        ?>
   
 <!-- 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><script  src="script.js"></script>
<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
</body>
</html>