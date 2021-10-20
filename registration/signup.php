<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <form action="includes/signup.inc.php" method="post">
        <img src="images/preprod.svg" alt="logo svg">
        <h2>Please enter your informations in order to have access to the preproduction server.</h2>
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder=" Repeat password">
        <button type="submit" name="submit">Sign up</button>
        <a href="login.php">
            <p>Already registred? Log in</p>
        </a>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<h5>Fill in all fields.</h5>";
                }
                elseif($_GET["error"] == "invaliduid") {
                    echo "<h5>Choose a proper username.</h5>";
                }
                elseif($_GET["error"] == "passwordsdontmatch") {
                    echo "<h5>Password doesn't match.</h5>";
                }
                elseif($_GET["error"] == "stmtfailed") {
                    echo "<h5>Something went wrong.</h5>";
                }
                elseif($_GET["error"] == "usernametaken") {
                    echo "<h5>username is already taken.</h5>";
                }
                elseif($_GET["error"] == "none") {
                    header("location: login.php");
                    exit();
                }
            }
        ?>

    </form>
</body>

</html>