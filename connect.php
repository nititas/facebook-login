<?php 
	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "Silpakorn59";
	$db_name = "FBlogin";

	$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

	mysqli_set_charset($conn,"UTF8");
 ?>