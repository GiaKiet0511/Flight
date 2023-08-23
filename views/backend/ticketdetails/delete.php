<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
$MaCTVe = $_REQUEST["MaCTVe"];

$ticketdetails->ticketdetails_delete($MaCTVe);
header("location:index.php?option=ticketdetails&cat=trash");