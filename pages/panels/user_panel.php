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
                  echo isset($_SESSION['role_id']) ? '' : 'Unknown';
                  switch ($_SESSION['role_id'])
                  {
                    case 'a':
                      header("Location: ../panels/admin_panel.php");
                      break;

                    case 'c':
                      echo 'Consultant';
                      break;

                    case 'u':
                      echo 'User';
                      break;
                    default:
                      echo 'New User';
                      break;
                  }
                ?>
              </div>
            </div>
          </div>
          <a href="../../scripts/logout.php" class="logout-button w-button">LOG OUT</a>
        </div>
      </div>
    </div>
    <section class="section">
      <h1 class="heading">Accounts</h1>
      <div class="div-block-accounts">
        <div>
          <h5 class="account-info-1">
            <?php echo isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ? $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] : ''; ?>
          </h5>
          <h6 class="account-info-2">
            <?php echo isset($_SESSION['account_number']) ? $_SESSION['account_number'] : ''; ?>
          </h6>
        </div>
        <div>
          <h5 class="account-info-1">
            <?php echo isset($_SESSION['balance']) ? $_SESSION['balance'] . ' PLN' : ''; ?>
          </h5>
          <h6 class="account-info-2">available funds</h6>
        </div>
      </div>
    </section>
    <section class="section">
      <h1 class="heading">Your cards</h1>
      <div class="div-block-cards">
        <img src="../img/blue-card.svg" width="200" />
        <div class="div-block-card-info">
          <div class="card-name">card name</div>
          <div class="card-number">
            <?php echo isset($_SESSION['account_number']) ? $_SESSION['account_number'] : ''; ?>
          </div>
          <div class="card-owner">
            <?php echo isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ? $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] : ''; ?>
          </div>
        </div>
      </div>
    </section>
    <script src="./scipts.js" type="text/javascript"></script>
  </body>
</html>