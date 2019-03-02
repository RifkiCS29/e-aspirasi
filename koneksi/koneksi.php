<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'db_aspirasi');

/**
 * $dbconnect : koneksi kedatabase
 */
$db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($db->connect_error) {
    die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}