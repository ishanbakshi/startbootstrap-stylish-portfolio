<?php
	require_once ("db-settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		//display an error
		echo "<p>Database connection failed</p>";
	}else{
		//on successfull connection choose table
		$sql_table = "registeration";
		$email = trim($_POST["email"]);
		$comment = trim($_POST["comment"]); 
		$query = "INSERT INTO registeration (email, comments) VALUES ('$email','$comment')";
		$result = @mysqli_query($conn, $query);
		if($result === false) {	 
			echo "<p class=\"wrong\">There is something wrong. Please try again later</p>";
    }else{
      header('Location: confirmRegistration.html'); 
		}
		mysqli_close($conn); 
	}



?>
