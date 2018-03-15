<?php
	


$DB_NAME = 'sac_yearbook';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
} else {
//  echo "Connection Successful<br>";
}





	
	if(isset($_POST['id'])){
		$id= $_POST['id'];
		$query = "update views set approval = 'approve' where id = '$id'";
		//$query = "INSERT INTO views (approval) VALUES ('approve') WHERE  deptmate = '$rollno'";
		if($query_run =$connection->query($query)){
			echo 1;
		}else{
			echo 0;
		}
	}	 
?>