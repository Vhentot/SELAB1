<?php
session_start();

if(isset($_POST['LoginBtn'])) {
    // Check if someone is already logged in
    if(!isset($_SESSION['Username'])) {
        $Username = $_POST['Username'];
        $password = md5($_POST['password']);

        $_SESSION['Username'] = $Username;
        $_SESSION['password'] = $password;

        
        header('Location: index.php');
    } else {
        echo "<h3>Someone is already logged in. Please wait for them to log out.</h3>";
    }
}
?>
