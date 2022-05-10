<?php

class DAO {

  function read_all() {
    try {
      $jsondata = file_get_contents("chain.json");
      $arr_data = json_decode($jsondata, true);
      return $arr_data;
    }
    catch(Exception $e) {
      echo "Error: " . $e->getMessage();
      exit();
    }
  }

  function get_previous_hashid($chain){
    $lastEl = array_values(array_slice($chain, -1))[0];
    return $lastEl[0];
  }

  function get_previous_index($chain){
    $lastEl = array_values(array_slice($chain, -1))[0];
    return $lastEl[0];
  }

 function get_new_hashid($previous_hashid,$index,$timestamp,$content){
   $full_string = $previous_hashid.$index.$timestamp.$content;
   $hash  = hash('sha256',$full_string);
   return $hash;
 }

 function read_content($content) {
   $arr_content = json_decode($content);
   return $arr_content;
 }

 function add_content($data) {

    $inp = file_get_contents('chain.json');
    $tempArray = json_decode($inp);
    array_push($tempArray, $data);
    $jsonData = json_encode($tempArray);
    file_put_contents('chain.json', $jsonData);
    // //new method
    // $fp = fopen('newchain.json', 'w');
    // fwrite($fp, $jsonData);
    // fclose($fp);

    }


}


?>