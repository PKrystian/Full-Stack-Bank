<?php
    if(isset($_GET["account_id"]))
    {
        require_once "connect.php";

        $account_id = $_GET["account_id"];

        $sql = "DELETE FROM user WHERE account_id=$account_id";
        $conn->query($sql);
    }

    header("Location: ../admin_page.php");
    exit;
?>