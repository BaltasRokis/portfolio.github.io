<!DOCTYPE html>
<html>

<head>
	<title>ver 1</title>
</head>

<body>
	<center>

		<?php
		$conn = mysqli_connect("localhost", "root", "root", "ver1");


		if($conn === false){
			die("ERROR: Could not connect. "
				.mysqli_connect_error());
		}


		$first_name = $_REQUEST['first_name'];
		$email = $_REQUEST['email'];
		$vieta_laikas = $_REQUEST['vieta_laikas'];
		$komentaras = $_REQUEST['komentaras'];


		$sql = "INSERT INTO komentarai1 VALUES ('$first_name','$email','$vieta_laikas','$komentaras')";

		if(mysqli_query($conn, $sql))
		{
		header("location: pradzia.html");
		}
		else{
			echo "ERROR: Hush! Sorry $sql. "
				.mysqli_error($conn);
		}

		mysqli_close($conn);

		?>
	</center>
</body>

</html>
