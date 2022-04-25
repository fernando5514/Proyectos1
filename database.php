<?php

$server = '83.47.104.187';
$username = 'admin';
$password = 'admin';
$database = 'coffee_cars';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>