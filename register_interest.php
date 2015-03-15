<?php
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		//display an error
		echo "<p>Database connection failed</p>";
	}else{
		//on successfull connection choose table
		$sql_table = "registeration";
		$email = trim($_POST["email"]);
		$comment = trim($_POST["comment"]);

		//set up sql command
		$query = "insert into '$sql_table' ('email','comments') values ('adaad@sdsd.com', 'adsd sdsd sdsd')"; 
		$result = mysqli_query($conn, $query); 
		if(!$result) { 
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		}else{
			echo "<p class=\"ok\">Successfully added your interest</p>"; 
		}
		mysqli_close($conn); 
	}



?>