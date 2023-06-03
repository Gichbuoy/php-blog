<?php
session_start();

// retrieve email and password supplied by user
$email = $_POST['email'];
$password = $_POST['password'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'sip&stories');


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
// query to check if email already exists
$query = "SELECT * FROM members WHERE email='$email'";  
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli)); // store result in result variable
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {   // email exists

    if (password_verify($password, $row['password'])) { // built-in password verify() to unhash encrypted password in database

        // compare contents of password variable to unhashed password -> if password match, create 3 session variables
        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        echo 'true';       // success code transmittted to login page
    }
    else {
        echo 'false';
    }

} else {
    echo 'false';
}

?>