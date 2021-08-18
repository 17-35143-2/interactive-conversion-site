<?php 

$valueEr= "";
$flag= false;
if ($_SERVER["REQUEST_METHOD"] == "GET") {

if (empty($_GET["value"])) {

    $valueEr = "value is required";
    $flag = true;
  }
if (empty($_GET["convert_s"])) {

    $convertEr = "convert rate is required";
    $flag = true;
  }
  if (!$flag) {
 
    $value =  input($_GET["value"]);
    $convert =  input($_GET["convert_s"]);
  }



}
  function input($v)
  {
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
  }
 


?>