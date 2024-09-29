<?php  
session_start(); // Establish connection to the current session
session_unset(); // Delete all session variables
session_destroy(); // Destroy the session

header('Location: index.php'); // Go back to homepage
?>
