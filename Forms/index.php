<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Field</title>
    <?php session_start(); ?>
</head>
<body>

    <?php
    
    if(isset($_SESSION['Username'])) {
        echo "<h3>{$_SESSION['Username']} is already logged in. Wait for them to log out first.</h3>";
    } else {
    ?>
    
    
    <form action="handleForms.php" method="POST">
        <p>Username: <input type="text" placeholder="Username" name="Username"></p>
        <p>Password: <input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Login" name="LoginBtn"></p>
    </form>
    
    <?php } ?>


    <?php if(isset($_SESSION['Username'])) { ?>
        <a href="unset.php"><p><input type="submit" value="Logout" name="LogoutBtn"> </a>
    <?php } ?>

    <h2>
        <?php
        if(isset($_SESSION['Username'])) {
            echo "User logged in: " . $_SESSION['Username'];
        }
        ?>      
    </h2>

    <h2>
        <?php
        if(isset($_SESSION['password'])) {
            echo "User hashed password: " . $_SESSION['password'];
        }
        ?>      
    </h2>

</body>
</html>
