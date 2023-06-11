<?php
    require "../models/users.php";
    require "../connect.php";

    $user = new Users();

    $user_action = isset($_GET['user_action']) ? $_GET['user_action'] : '';

    $user->account_id = isset($_POST[$user::ACCOUNT_ID]) ? $_POST[$user::ACCOUNT_ID] : '';
    $user->first_name = isset($_POST[$user::FIRST_NAME]) ? $_POST[$user::FIRST_NAME] : '';
    $user->last_name = isset($_POST[$user::LAST_NAME]) ? $_POST[$user::LAST_NAME] : '';
    $user->password = isset($_POST[$user::PASSWORD]) ? $_POST[$user::PASSWORD] : '';
    $user->address = isset($_POST[$user::ADDRESS]) ? $_POST[$user::ADDRESS] : '';
    $user->pesel = isset($_POST[$user::PESEL]) ? $_POST[$user::PESEL] : '';
    $user->email = isset($_POST[$user::EMAIL]) ? $_POST[$user::EMAIL] : '';
    $user->balance = isset($_POST[$user::BALANCE]) ? $_POST[$user::BALANCE] : '';
    $user->role_id = isset($_POST[$user::ROLE_ID]) ? $_POST[$user::ROLE_ID] : '';
    $user->account_number = isset($_POST[$user::ACCOUNT_NUMBER]) ? $_POST[$user::ACCOUNT_NUMBER] : '';
    $user->phone_number = isset($_POST[$user::PHONE_NUMBER]) ? $_POST[$user::PHONE_NUMBER] : '';

    switch($user_action) 
    {
        case 'l':
            user_login_handle($conn, $user);
            break;

        case 'r':
            user_register_handle($conn, $user);
            break;
    }

    function user_login_handle($conn, $user)
    {
        $user->login($conn);
    }

    function user_register_handle($conn, $user)
    {   
        // todo fix this :(
        // $saved_code = generate_random_code();
        // mail_code($saved_code, $user->email);
        // echo "
        //     <script>
        //         var userInput = prompt('Please enter the code:');
        //         if (userInput !== '" . $saved_code . "') {
        //             alert('Incorrect code. Registration aborted.');
        //             exit;
        //         }
        //     </script>
        // ";
        $user->register($conn);
    }

    function generate_random_code()
    {
        $numbers = "0123456789";
        $length = 6;
        $code = "";

        for ($i = 0; $i < $length; $i++) {
            $ran_index = rand(0, strlen($numbers) - 1);
            $code .= $numbers[$ran_index];
        }

        return $code;
    }

    function mail_code($saved_code_to, $mail_to)
    {
        $code = $saved_code_to;
        $to = $mail_to;
        $subject = "Your Savemander Code";
        $txt = "Your code is: $code";
        $headers = "From: savemander@example.com";

        mail($to, $subject, $txt, $headers);
    }
?>