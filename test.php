<?php 
	include("inc/define.php");
	
	
    $s = mysqli_connect($DB_ADDR, $DB_USER, $DB_PASS, $DB_NAME);
	if($s){
		echo "connect : Success<br>";
	}
	else{
		echo "disconnect : Failed <br>";
	}
	$dbConnect = mysqli_select_db($s,"labsemble");

	$result = mysqli_query($s,'SELECT * FROM user_client');
	while($data = mysqli_fetch_array($result)){
		echo $data['no'];echo "<br>";
		echo $data['registerDate'];echo "<br>";
		echo $data['email'];echo "<br>";
		echo $data['password'];echo "<br>";
		echo $data['companyName'];echo "<br>";
		echo $data['managerName'];echo "<br>";
		echo $data['managerPosition'];echo "<br>";
		echo "<br>";
	}

	

    mysqli_close($s);
 ?>
