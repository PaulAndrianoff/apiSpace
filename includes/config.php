<?php

// Connexion variables
define('DB_HOST','localhost');
define('DB_NAME','t2_partiel');
define('DB_USER','root');
define('DB_PASS','root'); // '' par défaut sur windows

try
{
    // Try to connect to database
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // Set fetch mode to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch (Exception $e)
{
    // Failed to connect
    die('Could not connect');
}
