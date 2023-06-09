<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Main Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../../style/styles.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="body">

    <?php
      session_start();

      if (!isset($_SESSION['current_user_role']) || $_SESSION['current_user_role'] != 'a')
        header('Location ../error.php');

      if (isset($_SESSION['success_message']))
        {
            echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
            unset($_SESSION['success_message']);
        }
    ?>

    <div class="navbar-logo-left">
      <div class="container">
        <div class="navbar-wrapper">
          <a href="#">
            <img src="../img//brand-name.svg" alt="" />
          </a>
          <nav role="navigation">
            <ul role="list" class="nav-menu-two w-list-unstyled">
              <li class="list-item">
                <a href="#" class="nav-link">Desktop</a>
              </li>
              <li><a href="#" class="nav-link">History</a></li>
              <li><a href="#" class="nav-link">Transfers</a></li>
            </ul>
          </nav>
          <div class="div-block-account-info">
            <img src="../img/user-icon.svg" width="40" class="user-icon" />
            <div class="div-block-account-info-text">
              <div class="user-name">
                <b>
                  <?php echo isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ? $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] : ''; ?>
                </b>
              </div>
              <div class="user-type">
                <?php 
                  echo isset($_SESSION['current_user_role']) ? 'Admin' : 'Unknown';
                ?>
              </div>
            </div>
          </div>
          <a href="../../scripts/logout.php" class="logout-button w-button">LOG OUT</a>
        </div>
      </div>
    </div>
    <div>
        <h1>Table of Users:</h1>
        <form action="admin_panel.php" method="GET">
            <input type="text" name="search" placeholder="Search">
            <input type="submit" value="Search">
        </form>
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

            <?php require_once "../../scripts/print_user_table.php"; ?>
            
        </table>
    </div>
    <script src="./scipts.js" type="text/javascript"></script>
  </body>
</html>