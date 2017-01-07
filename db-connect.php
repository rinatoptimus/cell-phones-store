<?php 
	include ("db-config.php");
	$conn = mysqli_connect($host, $user, $pass, $db_name) or die("Cannot connect to database");
	// if($conn)
	// 	echo "OK!";
	// else "Bad";
	// $query = "SELECT * FROM cell-phones-store";
	$query = "SELECT cell_phone_name FROM cell_phones";

	mysqli_query($conn, $query) or die("Error quering database");

	$result = mysqli_query($conn, $query);

	//$row = mysqli_fetch_array($result); - чтобы выводилась 1-я запись из БД

	//
	//$arr[] = $row; echo $arr;

	// while($row = mysqli_fetch_array($result)) {
	// 	echo $row['cell_phone_name'];
	// }
	

	mysqli_close($conn);
?>