<?php

$server = '79.146.192.82';
$username = 'admin';
$password = 'admin';
$database = 'coffee_cars';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>