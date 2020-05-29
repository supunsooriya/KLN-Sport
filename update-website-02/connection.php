	<?php

		 $conn = mysqli_connect('localhost','root','','kln_sport'); 
		
		 if(mysqli_connect_errno()){
		 	die('database connection fails' .mysqli_connect_errno());
// 
		 }
		 else{
		 	// echo "connection Success";
		 }

	?>