<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank XYZ Poland</title>
    <link rel="stylesheet" href="../../style/styles.css">
</head>
    <body>
        <?php require_once "../../scripts/edit_user.php"; ?>

        <div class="create_user">
            <h1 class = "cu-heading">User info:</h1>
            <form method="post">
            <div class = "div-block-cu">
                <div class = "left-info-cu">
                    <input type="hidden" name="account_id" value="<?php echo $account_id ?>">
                    <div>
                        <b>ID</b>
                        <input type="hidden" name="account_id" value="<?php echo $account_id ?>"><span><?php echo $account_id ?></span><br><br> 
                    </div>
                    <div>
                        <br>
                        <label>Name</label>
                        <input type="text" name="first_name" value="<?php echo $first_name ?>">
                    </div>
                    <div>
                        <label>Surname</label>
                        <input type="text" name="last_name" value="<?php echo $last_name ?>">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" minlength="8" value="<?php echo $password ?>">
                    </div>
                    <div>
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $address ?>">
                    </div>
                    <div>
                        <label>PESEL</label>
                        <input type="text" name="PESEL" minlength="11" maxlength="11" value="<?php echo $PESEL ?>">
                    </div>
                </div>
                <div class = "right-info-cu">
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email ?>">
                    </div>
                    <div>
                        <label>Balance</label>
                        <input type="number" name="balance" value="<?php echo $balance ?>">
                    </div>
                    <div>
                        <label>Phone number</label>
                        <input type="tel" name="phone_number" minlength="9" maxlength="9" value="<?php echo $phone_number ?>">
                    </div>
                    <div>
                        <label>Date opened</label>
                        <input type="datetime-local" name="date_opened" value="<?php echo $date_opened ?>">
                    </div>
                    <div>
                        <label>Role ID</label>
                        <input type="text" name="role_id" minlength="1" maxlength="1" value="<?php echo $role_id ?>">
                    </div>
                    <div>
                        <label>Account number</label>
                        <input type="text" name="account_number" value="<?php echo $account_number ?>">
                    </div>
                </div>
            </div>
            <div class="buttons-container">
                        <button type="submit">Submit</button>
                        <a href="./admin_panel.php" type="submit">Cancel</a>
                    </div>
            </form>
        </div>
    </body>
</html>