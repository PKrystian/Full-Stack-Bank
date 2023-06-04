<?php

    class Users
    {
        /**
         * @property first_name
         * @property last_name
         * @property password
         * @property address
         * @property pesel
         * @property email
         * @property balance
         * @property role_id
         * @property account_number
         * @property phone_number
         * @property sql
         */

        private const TABLE_NAME = 'user';

        public const ACCOUNT_ID = 'account_id';
        public const FIRST_NAME = 'first_name';
        public const LAST_NAME = 'last_name';
        public const PASSWORD = 'password';
        public const ADDRESS = 'address';
        public const PESEL = 'pesel';
        public const EMAIL = 'email';
        public const BALANCE = 'balance';
        public const ROLE_ID = 'role_id';
        public const DATE_OPENED = 'date_opened';
        public const ACCOUNT_NUMBER = 'account_number';
        public const PHONE_NUMBER = 'phone_number';

        public function login($conn)
        {
            $this->sql = "SELECT count(*) FROM " . $this::TABLE_NAME . " WHERE " . $this::EMAIL . " = '$this->email' AND " . $this::PASSWORD . " = '$this->password'";

            $result = $conn->query($this->sql);

            while($row = $result->fetch_row())
                $output = $row[0];

            session_start();

            if(!$output)
            {
                $_SESSION['error_message'] = 'Could not log in';
                header("Location: ../../index.php?user_login=1");
            }
            else
            {
                $_SESSION['success_message'] = 'Logged in successfully!';
                header("Location: ../../pages/panels/user_panel.php");
            }

            exit;
        }

        public function register($conn)
        {
            $register_date = date('Y-m-d');

            $this->sql = "INSERT INTO " . $this::TABLE_NAME . " ("
                . $this::FIRST_NAME . ", " 
                . $this::LAST_NAME . ", "
                . $this::PASSWORD . ", "
                . $this::ADDRESS . ", "
                . $this::PESEL . ", "
                . $this::EMAIL . ", "
                . $this::BALANCE . ", "
                . $this::PHONE_NUMBER . ", "
                . $this::DATE_OPENED . ", "
                . $this::ROLE_ID . ", "
                . $this::ACCOUNT_NUMBER . ")" .
            "VALUES ('$this->first_name', '$this->last_name', '$this->password', '$this->address', '$this->pesel',
            '$this->email', 0, '$this->phone_number', '$register_date', 'u', '');";

            $result = $conn->query($this->sql);

            session_start();

            if(!$result)
            {
                $_SESSION['error_message'] = 'Could not register';
                header("Location: ../../index.php?user_login=0");
            }
            else
            {
                $_SESSION['success_message'] = 'Registered successfully!';
                header("Location: ../../pages/panels/user_panel.php");
            }

            exit;
        }
    }
?>