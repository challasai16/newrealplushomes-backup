<?php
define("DB_HOST", "localhost");
define("DB_USER", "u136667941_contactdata");
define("DB_PASSWORD", "N41qd/1|c");
define("DB_NAME", "u136667941_contactdata");

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>