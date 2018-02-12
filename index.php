<?php
/**
 * Database connection
 * @param $conn PDO
 * @param $exception
 * return $conn ou $exception
 */
try {
    $conn = new PDO('mysql:host=localhost;dbname=voiture', 'root', 'root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}