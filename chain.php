<?php 
// reading last block's hash id
  $previous_hashid = $dao->get_previous_hashid($full_chain["chain"]);
  echo "reading last block's hash id:<br />";
  echo $previous_hashid;
  echo "<hr />";

  // reading last block's index to calculate next index
  $previous_index = $dao->get_previous_index($full_chain["chain"]);
  $next_index = $previous_index+1;
  echo "reading last block's index to calculate next index:<br />";
  echo "Last: " .$previous_index. " | Next: ".$next_index;
  echo "<hr />";

  echo "New hashid:<br />";
  $timestamp = round(microtime(true) * 1000);
  // example content
  // $content = '{"from": "network","to": "simone","amount": 1000}';
  $content = $_POST["json_data"];
  $new_hashid = $dao->get_new_hashid($previous_hashid,$next_index,$timestamp,$content);
  echo $new_hashid;
  echo "<hr />";