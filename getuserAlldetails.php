<?php
if(isset($_GET['user'])){
$userid = $_GET['user'];
$bank = $_GET['bank'];
if ( $userid == "user1" && $bank=="barclays") {
	echo file_get_contents("user1.json");
}
else if($userid == "user2"&& $bank=="barclays"){	
	echo file_get_contents("user2.json");
}


else if($userid == "user1" && $bank=="HDFC"){
	echo file_get_contents("user1_hdfc.json");
}
else if($userid == "user2"&& $bank=="HDFC"){	
	echo file_get_contents("user2_hdfc.json");
}


else
	echo json_encode("Sorry User not found");




}else
	echo json_encode("Parameters missing");

?>
