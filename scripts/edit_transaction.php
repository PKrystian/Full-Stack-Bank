<?php
    require_once "connect.php";

    if (isset($_GET["transfer_id"])) 
    {
        $transfer_id = $_GET["transfer_id"];
        $sql = "SELECT * FROM transfers WHERE transfer_id = $transfer_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();

            echo <<< FORM
                <form method="POST" action="update_transaction.php?transfer_id=$transfer_id">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{$row["title"]}"><br>
                    <label for="description">Description:</label>
                    <input type="text" name="description" value="{$row["description"]}"><br>
                    <label for="amount">Amount:</label>
                    <input type="text" name="amount" value="{$row["amount"]}"><br>
                    <label for="sender_account_number">sender_account_number:</label>
                    <input type="text" name="sender_account_number" value="{$row["sender_account_number"]}"><br>
                    <label for="receiver_account_number">receiver_account_number:</label>
                    <input type="text" name="receiver_account_number" value="{$row["receiver_account_number"]}"><br>
                    <label for="sender_address">sender_address:</label>
                    <input type="text" name="sender_address" value="{$row["sender_address"]}"><br>
                    <label for="receiver_address">receiver_address:</label>
                    <input type="text" name="receiver_address" value="{$row["receiver_address"]}"><br>
                    <label for="date">date:</label>
                    <input type="text" name="date" value="{$row["date"]}"><br>
                    <label for="sender_id">sender_id:</label>
                    <input type="text" name="sender_id" value="{$row["sender_id"]}"><br>
                    <label for="receiver_id">receiver_id:</label>
                    <input type="text" name="receiver_id" value="{$row["receiver_id"]}"><br>
                    <label for="transfer_type">transfer_type:</label>
                    <input type="text" name="transfer_type" value="{$row["transfer_type"]}"><br>
                    <input type="submit" value="Update">
                    <input type="button" value="Cancel" onclick="location.href='../pages/panels/consultant_panel.php';"/>
                </form>
            FORM;
        }else{
            echo "Transaction not found";
        }
    }

    $conn->close();
?>