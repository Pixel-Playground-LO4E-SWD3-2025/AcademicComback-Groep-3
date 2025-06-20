<?php
require_once '../partials/header.php';
require_once 'db.php';

$query = "SELECT naam FROM vrienden";
$result = mysqli_query($conn, $query);
