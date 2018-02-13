<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 12/02/2018
 * Time: 19:31
 */

try {
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=roadr', 'root', 'motdepasse');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
