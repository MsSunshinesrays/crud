<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "crud";

$con = new mysqli("$servername", "$username", "$password", "$db");

if (!$con) {
    echo "error";
}
