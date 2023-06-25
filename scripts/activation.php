<?php
    require_once "connect.php";

    session_start();

    if ($_SESSION['verification_email'] === 'u') {
        header("Location: ../pages/panels/user_panel.php");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $entered_code = $_POST['activation_code'];
        $saved_code = $_SESSION['saved_activation_code'];
        $role_id = $_SESSION['verification_role_id'];
        $email = $_SESSION['verification_email'];

        if ($entered_code === $saved_code) {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE user SET role_id = 'u' WHERE email = ?";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("s", $email);

            $stmt->execute();

            $stmt->close();
            $conn->close();

            $_SESSION['success_message'] = 'Activation successful';

            header("Location: ../pages/panels/user_panel.php");

            exit;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account Activation</title>
</head>
<body>
    <h1>Account Activation</h1>
    <p>Re-login after successful activation</p>
    <form method="POST" action="">
        <label for="activation_code">Enter your activation code:</label>
        <input type="text" name="activation_code" id="activation_code" required>
        <input type="submit" value="Activate">
    </form>
</body>
</html>