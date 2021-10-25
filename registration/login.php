


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

    <form action="includes/login.inc.php" method="post">
        <img src="images/preprod.svg" alt="logo svg">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Log in</button>
        <a href="signup.php">
            <p>No ID yet? Get one!</p>
        </a>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<h5>Fill in all fields.</h5>";
                }
                elseif($_GET["error"] == "wronglogin") {
                    echo "<h5>Incorrect login information.</h5>";
                }
            }
        ?>

    </form>

</body>

</html>