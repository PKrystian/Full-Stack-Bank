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

        <?php require_once "scripts/edit_user.php"; ?>

        <div class="create_user">
            <h1>User info:</h1>
            <form method="post">
                <input type="hidden" name="account_id" value="<?php echo $account_id ?>">
                <div>
                <label>ID</label>
                    <input type="hidden" name="account_id" value="<?php echo $account_id ?>">
                    <span><?php echo $account_id ?></span>
                </div>
                <div>
                    <label>Name</label>
                    <input type="text" name="first_name" value="<?php echo $first_name ?>">
                </div>
                <div>
                    <label>Surname</label>
                    <input type="text" name="last_name" value="<?php echo $last_name ?>">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo $password ?>">
                </div>
                <div>
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo $address ?>">
                </div>
                <div>
                    <label>PESEL</label>
                    <input type="text" name="PESEL" value="<?php echo $PESEL ?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $email ?>">
                </div>
                <div>
                    <label>Balance</label>
                    <input type="text" name="balance" value="<?php echo $balance ?>">
                </div>
                <div>
                    <label>Phone number</label>
                    <input type="text" name="phone_number" value="<?php echo $phone_number ?>">
                </div>
                <div>
                    <label>Date opened</label>
                    <input type="text" name="date_opened" value="<?php echo $date_opened ?>">
                </div>
                <div>
                    <label>Role ID</label>
                    <input type="text" name="role_id" value="<?php echo $role_id ?>">
                </div>
                <div>
                    <label>Account number</label>
                    <input type="text" name="account_number" value="<?php echo $account_number ?>">
                </div>
                <div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                    <div>
                        <a href="./admin_page.php" type="submit">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>