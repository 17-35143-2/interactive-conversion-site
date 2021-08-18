<?php 


include "../model/model.php";

$value = $_GET['value'];
$convert_s = $_GET['convert_s'];
if(isset($_GET['convert_s'])){
	$allSearchedUsers = searchUser($_GET['convert_s']);

	echo "Convert result is  " .$allSearchedUsers['value2']*$_GET['value'] ."<br>";
$result = $allSearchedUsers['value2']*$_GET['value'];
addresult($convert_s,$result);



}
else{
	echo "Error";
	return;
}
?>
