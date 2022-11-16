<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "parfemi";

$db_connection = new mysqli($hostname, $username, $password, $db) or die("Connection error: %s\n" . $connection->error);
