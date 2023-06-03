<?php
session_start(); // ensure user is loggen in after registration

// open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'sip&stories');

// output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// variables that store below data from our form
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']); // escape special characters input
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($fname) < 2) {
    echo 'fname';    // register.php line 64 -> Javascript interprete these error code and display error message
} elseif (strlen($lname) < 2) {
    echo 'lname';
} elseif (strlen($email) <= 4) {
    echo 'eshort';  // meet minimum number of characters
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($password) <= 4) {  // minimum 4 char
    echo 'pshort';

//VALIDATION
	
} else {   // if all above passes encrypt password
	  
	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));  // password_hash() does the encryption
	
    // perform database query
	$query = "SELECT * FROM members WHERE email='$email'"; // ensure email does not already exists
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

        // check if query is successfull
		if ($num_row < 1) {  // user email doesn't exist

			$insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

			if ($insert_row) {  // if row insertion is successfull, crete 3 session variables that store record id

				$_SESSION['login'] = $mysqli->insert_id;  // id is stored in a session variable called login
				$_SESSION['fname'] = $fname;      // also store user first and last name
				$_SESSION['lname'] = $lname;

				echo 'true';   //output access code true

			}

		} else {

			echo 'false';    // check if email already exists in the system   - error message in line 59 (register.php) is displayed

		}
		
}

?>