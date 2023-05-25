<?php
    require_once "connect.php";
    require_once "import_user.php";

    foreach ($data as $row) 
    {
        echo <<< DATA
            <tr>
                <td>{$row["account_id"]}</td>
                <td>{$row["first_name"]}</td>
                <td>{$row["last_name"]}</td>
                <td>{$row["password"]}</td>
                <td>{$row["address"]}</td>
                <td>{$row["PESEL"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["balance"]}</td>
                <td>{$row["phone_number"]}</td>
                <td>{$row["date_opened"]}</td>
                <td>{$row["role_id"]}</td>
                <td>{$row["account_number"]}</td>
                <td>
                    <a href="edit_user_page.php?account_id=$row[account_id]">Edit</a>
                    <a href="scripts/delete_user.php?account_id=$row[account_id]">Delete</a>
                </td>
            </tr>
        DATA;
    }
?>