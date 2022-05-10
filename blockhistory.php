<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Blockchain - transactions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="slides">
  <ul class="roller">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
<?php
  include 'dao.php';
  include 'config.php';

  // initializing the class
  $dao = new DAO();
            
  ?>

<ul id="steps" class="roller">
    <?php
    $jsondata = file_get_contents("chain.json");
              
            $arr_data = json_decode($jsondata, true);
    for($i = 1;$i < count($arr_data['chain']);$i++)
            {
                // echo 'ID - '.$arr_data['chain'][$i]['id']."\n";
                // echo 'ID - '.$arr_data['chain'][$i]['from']."\n";
                // echo 'ID - '.$arr_data['chain'][$i]['to']."\n";
            
            ?>
  <li><?php echo $arr_data['chain'][$i]['id'] ?></li>
    <?php
    }
    ?>


</ul>
<div id="titles">
  <ul class="roller">
    <?php
    $jsondata = file_get_contents("chain.json");
              
            $arr_data = json_decode($jsondata, true);
    for($i = 1;$i < count($arr_data['chain']);$i++)
            {
                ?>
    <li>
      <h2><?php echo $arr_data['chain'][$i]['from'] ?></h2>
      <p><?php echo "transfered amount of Rs. ".$arr_data['chain'][$i]['amount']." to" ?></p>
      <h2><?php echo $arr_data['chain'][$i]['to'] ?></h2>
      <p><?php echo "Transaction key matched : ".$arr_data['chain'][$i]['hashid'] ?></p>
    </li>
    <?php
    }
    ?>
  </ul>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><script  src="./script.js"></script>

</body>
</html>
