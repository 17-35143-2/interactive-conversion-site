<?php 


include "../model/model.php";


$convert_s = $_GET['convert_s'];


	$allSearchedUsers = User($_GET['convert_s']);

	foreach($allSearchedUsers as $data)
	{
		echo "Convert result is  " .$data['result']."For ".$data['convert_s'];
	}





?>
