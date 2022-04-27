<?php

$server = '79.146.203.183';
$username = 'admin';
$password = 'admin';
$database = 'coffee_cars';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>