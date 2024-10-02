<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem_1</title>
    <?php session_start(); ?>

</head>
    <H1>WELCOME TO MY WEBSITE</H1>
<body>
    <form action="login.php" method="POST">
    <h1><p>Username <input type="username" name="Username"></p></h1>
    <h1><p>Password <input type="Password" name="Password"></p></h1>
    <p><input type="submit" value="Login" id="loginbtn" name="loginbtn"></p>
    </form>
</body>
    <a href="logout.php"><button>Logout</button></a>
    <?php 
    if (isset($_SESSION['userLoggedIn'])){
        echo $_SESSION['userLoggedIn'];
    } else {
        if (isset($_SESSION['Username']) && isset($_SESSION['Password'])){
            echo " <h1>User logged in: " . $_SESSION['Username'] . "<h1>Password: " . $_SESSION['Password'];
        }
    }
    ?>
    
</html>
    

