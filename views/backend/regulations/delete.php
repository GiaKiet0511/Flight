<?php
use App\Models\Regulations;

$regulations = new Regulations();
$Id = $_REQUEST["Id"];

$regulations->regulations_delete($Id);
header("location:index.php?option=regulations&cat=trash");