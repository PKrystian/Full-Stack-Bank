<?php

    class Transfers
    {
        /**
         * @property title
         * @property description
         * @property amount
         * @property sender_account_number
         * @property receiver_account_number
         * @property sender_address
         * @property receiver_address
         * @property date
         * @property sender_id
         * @property receiver_id
         * @property transfer_type
         * @property sql
         */

         private const TABLE_NAME = 'transfers';

        private const TRANSFER_ID = 'transfer_id';
        private const TITLE = 'title';
        private const DESCRIPTION = 'description';
        private const AMOUNT = 'amount';
        private const SENDER_ACCOUNT_NUMBER = 'sender_account_number';
        private const RECEIVER_ACCOUNT_NUMBER = 'receiver_account_number';
        private const SENDER_ADDRESS = 'sender_address';
        private const RECEIVER_ADDRESS = 'receiver_address';
        private const DATE = 'date';
        private const SENDER_ID = 'sender_id';
        private const RECEIVER_ID = 'receiver_id';
        private const TRANSFER_TYPE = 'transfer_type';

        public function new_transfer($conn)
        {
            $this->sql = '';

            $stmt = $conn->prepare($this->sql);

            $stmt->bind_param();

            $stmt->execute();

            if($stmt->error)
            {

            }
        }

        public function print_transfer_history($conn)
        {
            $this->sql = 'SELECT '
                . $this::TITLE . ', '
                . $this::DESCRIPTION . ', '
                . $this::AMOUNT . ', '
                . $this::SENDER_ACCOUNT_NUMBER . ', '
                . $this::SENDER_ADDRESS . ', '
                . $this::DATE . ', '
                . $this::TRANSFER_TYPE 
                    . ' FROM ' . $this::TABLE_NAME
                    . ' INNER_JOIN user ON ' . $this::SENDER_ID . ' = account_id';
                    
            $result = $conn->query($this->sql);

            if ($result->num_rows > 0) 
            {
                while ($row = $result->fetch_assoc()) 
                {
                    echo <<< TRANSFERS
                        <tr>
                            <td>{$row["title"]}</td>
                            <td>{$row["description"]}</td>
                            <td>{$row["amount"]}</td>
                            <td>{$row["sender_account_number"]}</td>
                            <td>{$row["sender_address"]}</td>
                            <td>{$row["date"]}</td>
                            <td>{$row["transfer_type"]}</td>
                        </tr>
                    TRANSFERS;
                }
            }
        }

        private function get_sender($conn)
        {

        }

        private function get_receiver($conn)
        {

        }
    }
?>