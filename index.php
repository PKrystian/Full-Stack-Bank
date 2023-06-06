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
    <?php 
        session_start();

        echo '<a href="./index.php?user_login=1"></a>'; 
        
        if (isset($_SESSION['error_message']))
        {
            echo "<script>alert('" . $_SESSION['error_message'] . "');</script>";
            unset($_SESSION['error_message']);
        }

    ?>

    <?php
        echo <<< USER_ACTION
            <a href="index.php?user_login=1"><input type="button" value="Login"></a>
            <a href="index.php?user_login=0"><input type="button" value="Register"></a>
        USER_ACTION;



        // Display login form if user_login is not set or is true
        if (!isset($_GET["user_login"]) || $_GET["user_login"]) {
            echo <<< LOGIN_FORM
                <form action="scripts/handlers/user_handler.php?user_action=l" method="POST">
                    <input type="email" name="email" placeholder="Email"> <br>
                    <input type="password" name="password" placeholder="Password"> <br>
                    <input type="submit" value="Login">
                </form>
            LOGIN_FORM;
        }
        // Display register form if user_login is false
        else if (!$_GET["user_login"]) {
            echo <<< REGISTER_FORM
                <form action="scripts/handlers/user_handler.php?user_action=r" method="POST">
                    <input type="text" name="first_name" placeholder="First name"> <br>
                    <input type="text" name="last_name" placeholder="Last name"> <br>
                    <input type="email" name="email" placeholder="Email"> <br>
                    <input type="password" minlength="8" name="password" placeholder="Password"> <br>
                    <input type="text" minlength="11" maxlength="11" name="pesel" placeholder="PESEL"> <br>
                    <input type="text" name="address" placeholder="Address"> <br>
                    <input type="text" minlength="9" maxlength="9" name="phone_number" placeholder="Phone number"> <br>
                    <input type="submit" value="Register">
                </form>
            REGISTER_FORM;
        }
    ?>

    </body>
</html>