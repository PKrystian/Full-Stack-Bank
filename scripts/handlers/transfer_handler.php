<?php
    require "../models/transfers.php";
    require "../connect.php";

    $transfer = new Transfer();

    $transfer_action = isset($_GET['transfer_action']) ? $_GET['transfer_action'] : '';

    switch($transfer_action) 
    {
        case 'h':
            transfer_history_handle($conn, $transfer);
            break;

        case 'n':
            new_transfer_handle($conn, $transfer);
            break;
    }

    function transfer_history_handle($conn, $transfer)
    {
        $transfer->print_transfer_history($conn);
    }

    function new_transfer_handle($conn, $transfer)
    {
        return;
    }
?>