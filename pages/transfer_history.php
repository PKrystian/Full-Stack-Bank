<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Surname</th>
            <th>Password</th>
            <th>Address</th>
            <th>PESEL</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Phone number</th>
            <th>Date opened</th>
            <th>Role ID</th>
            <th>Account number</th>
            <th>Action</th>
        </tr>

        <?php 
            require_once "../scripts/handlers/transfer_handler.php?transfer_action=h"; 
        ?>

    </table>
</body>
</html>