<?php
    require_once "connect.php";

    $account_id = "";
    $first_name = "";
    $last_name = "";
    $password = "";
    $address = "";
    $PESEL = "";
    $email = "";
    $balance = "";
    $phone_number = "";
    $date_opened = "";
    $role_id = "";
    $account_number = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $account_id = $_POST["account_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $password = $_POST["password"];
        $address = $_POST["address"];
        $PESEL = $_POST["PESEL"];
        $email = $_POST["email"];
        $balance = $_POST["balance"];
        $phone_number = $_POST["phone_number"];
        $date_opened = $_POST["date_opened"];
        $role_id = $_POST["role_id"];
        $account_number = $_POST["account_number"];

        do {
            if( empty($account_id) || empty($first_name) || empty($last_name) || empty($password)
            || empty($address) || empty($PESEL) || empty($email) || empty($balance) || empty($phone_number)
            || empty($date_opened) || empty($role_id) || empty($account_number))
            {
                echo "<script>alert('Error, all fiels are needed');</script>";
                break;
            }

            $sql = "INSERT INTO user (account_id, first_name, last_name, password, address, PESEL,
            email, balance, phone_number, date_opened, role_id, account_number)" .
            "VALUES ('$account_id', '$first_name', '$last_name', '$password', '$address', '$PESEL',
            '$email', '$balance', '$phone_number', '$date_opened', '$role_id', '$account_number')";
            $result = $conn->query($sql);

            if(!$result)
            {
                echo "<script>alert('Error, Invalid query');</script>";
                break;
            }

            $account_id = "";
            $first_name = "";
            $last_name = "";
            $password = "";
            $address = "";
            $PESEL = "";
            $email = "";
            $balance = "";
            $phone_number = "";
            $date_opened = "";
            $role_id = "";
            $account_number = "";

            header("Location: ./admin_page.php");
            exit;

        } while(false);
    }
?>