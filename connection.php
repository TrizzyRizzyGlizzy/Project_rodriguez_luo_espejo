<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sjcjc_academics";


if (!$con = $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname)) {
  die("Connection failed: " . $con->connect_error);
}

?>
