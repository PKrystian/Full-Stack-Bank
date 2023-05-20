<?php
    require_once "connect.php";

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            $data[] = array(
                "account_id" => $row["account_id"],
                "first_name" => $row["first_name"],
                "last_name" => $row["last_name"],
                "password" => $row["password"],
                "address" => $row["address"],
                "PESEL" => $row["PESEL"],
                "email" => $row["email"],
                "balance" => $row["balance"],
                "phone_number" => $row["phone_number"],
                "date_opened" => $row["date_opened"],
                "role_id" => $row["role_id"],
                "account_number" => $row["account_number"]
            );
        }
    } 
    else{
        echo "No data";
    }

    $conn->close();
?>