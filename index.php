<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank App!</title>
    <style>
        table, th, td 
        {
            border: 1px solid;
        }
</style>
</head>
<body>
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
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
        </tr>

        <?php require_once "scripts/print_user.php"; ?>
        
    </table>
</body>
</html>