<?php 

include "model/model.php";

$flag = false;
$convert_s = $inch =  $feet = $kg = $g = "";
$convert_sEr = $inchEr = $feetEr = $kgEr = $gEr = "";

 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     

 if (empty($_POST["convert_s"])) {
    $convert_sEr = "convert_s value is required";
      $flag = true;
    
  
  }
 if (empty($_POST["value1"])) {
    $inchEr = "value1 is required";
      $flag = true;
    
  
  }
 if (empty($_POST["value2"])) {
    $feetEr = " value 2 is required";
      $flag = true;
    
  
  }
 
  if(!$flag){
    $convert_s = $_POST["convert_s"];
    $value1 = $_POST["value1"];
    $value2 = $_POST["value2"];
    
  
    add($convert_s,$value1,$value2);
  

  }
}

?>