<?php
// Started to Code on 08-Nov-2017 by AMR
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'community';

ini_set('display_errors', 1);
error_reporting(E_ALL);
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
