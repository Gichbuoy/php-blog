<?php
session_start();
unset($_SESSION['login']); // unset() clears every session created
unset($_SESSION['fname']);
unset($_SESSION['lname']);

header("location:index.php?logout=true");  // redirect user to index page
?>