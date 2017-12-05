<html>

<head></head>

 <body>
 
 	<style>
		body {
			color: #FFFFCC;
			font-size: 1.5em;
			font-family: Papyrus, fantasy;
		}
 	</style>
	<?php
	
		$servername = "localhost";
		$username = "tkh";
		$password = "";
		
		// Create connection
		$conn = new mysqli ( $servername, $username, $password, "lvr" );
		
		$sql = "SELECT lakotaWord, pronunciation, definition FROM Lakota_Words";
		
		// Check connection
		if (! $conn) {
			die ( "Error loading Word of Day." );
			echo "Error loading Word of Day.";
		}
		
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			
			echo 'Lakota: ' .$row["lakotaWord"] .'<br />';
			
			if($row["pronunciation"] != null )
			{
				echo $row["pronunciation"] .'<br />';
			}
			echo 'English: ' .$row["definition"] ;
		}
		else
		{
			echo "no word found";	
		}
		
	?>

</body>
</html>