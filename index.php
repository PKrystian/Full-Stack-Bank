<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank XYZ Poland</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <?php echo '<a href="./index.php?user_login=1"></a>'; ?>

    <?php
        echo <<< USER_ACTION
            <a href="index.php?user_login=1"><input type="button" value="Login"></a>
            <a href="index.php?user_login=0"><input type="button" value="Register"></a>
        USER_ACTION;

        // Display login form if user_login is not set or is true
        if (!isset($_GET["user_login"]) || $_GET["user_login"]) {
            echo <<< LOGIN_FORM
                <form action="scripts/login.php" method="POST">
                    <input type="text" name="username" placeholder="Username"> <br>
                    <input type="text" name="password" placeholder="Password"> <br>
                    <input type="submit" value="Login">
                </form>
            LOGIN_FORM;
        }
        // Display register form if user_login is false
        else if (!$_GET["user_login"]) {
            echo <<< REGISTER_FORM
                <form action="scripts/register.php" method="POST">
                    <input type="text" name="firstname" placeholder="First name"> <br>
                    <input type="text" name="lastname" placeholder="Last name"> <br>
                    <input type="text" name="email" placeholder="Email"> <br>
                    <input type="text" name="password" placeholder="Password"> <br>
                    <input type="text" name="firstname" placeholder="First name"> <br>
                    <input type="text" name="firstname" placeholder="First name"> <br>
                    <input type="text" name="firstname" placeholder="First name"> <br>
                    <input type="submit" value="Register">
                </form>
            REGISTER_FORM;
        }
    ?>

    </body>
</html>