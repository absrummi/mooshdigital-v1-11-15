<?php 
	if (isset($_POST["send"])) {
		$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$name = $_POST["name"]; // gather all the variables
		$email = $_POST["email"];
		$message = $_POST["message"];
		$sql = "INSERT INTO contact (id, name, email, message)
		VALUES ('0' , '".$name."' , '".$email."' , '".$message."')";
		$servername = "localhost";
		$username = "mooshdigital";
		$password = "Moosh@1122";
		$dbname = "moosh";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (mysqli_query($conn, $sql)) {
		    session_start();
			$_SESSION['message'] = 'Message has been sent sucessfully! Thanks for contacting us.';
			header('Location: contactus.php');
			exit();
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}

?>