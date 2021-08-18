<?php

require "connect.php";



   function add($convert_s, $value1, $value2){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO rate_unit(convert_s, value1, value2) VALUES (?, ?, ?)');
    $sql->bind_param('sss',$convert_s, $value1, $value2);
   $sql->execute();
   $sql->close();
    $conn->close();
  
}
   function addresult($convert_s,$result){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO results(convert_s, result) VALUES (?, ?)');
    $sql->bind_param('ss',$convert_s, $result);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

function searchUser($convert_s){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `rate_unit` WHERE convert_s = ?");
    $sql->bind_param("s",$convert_s);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}
function User($convert_s){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `results` WHERE convert_s = ?");
    $sql->bind_param("s",$convert_s);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

?>