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
        <div>
            <h1>Table of Users:</h1>
            <a href="create_user_page.php"><input type="button" value="Add User"></a><br></br>
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
                    <th>Action</th>
                </tr>

                <?php require_once "scripts/print_user_table.php"; ?>
                
            </table>
        </div>
    </body>
</html>