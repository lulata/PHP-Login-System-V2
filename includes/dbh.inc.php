<?php

$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'phploginv2';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
