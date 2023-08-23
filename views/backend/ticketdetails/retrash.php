<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
$MaCTVe = $_REQUEST["MaCTVe"];

$data = array(
    'status' => 2
);
$ticketdetails->ticketdetails_update($data, $MaCTVe);
header("location:index.php?option=ticketdetails&cat=trash");