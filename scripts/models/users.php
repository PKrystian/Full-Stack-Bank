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

            if(!$output)
            {
                echo "<script>alert('Could not log in');</script>";
                // header("Location: ../../index.php");
            }
            else
            {
                echo "<script>alert('Logged in succesfully!');</script>";
                // header("Location: ../../pages/panels/user_panel.php");
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

            if(!$result)
            {
                echo "<script>alert('Could not register');</script>";
                // header("Location: ../../index.php");
            }
            else
            {
                echo "<script>alert('Account registered succesfully!');</script>";
                // header("Location: ../../pages/panels/user_panel.php");
            }

            exit;
        }
    }
?>