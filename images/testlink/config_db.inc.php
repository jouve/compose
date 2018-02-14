<?php

$db_type = getenv('DB_TYPE')
$db_user = getenv('DB_USER')
$db_pass = getenv('DB_PASS')
$db_host = getenv('DB_HOST')
$db_name = getenv('DB_NAME')
$db_table_prefix = getenv('DB_TABLE_PREFIX')

if ($db_type === false || $db_user === false || $db_pass === false || $db_host === false || $db_name === false) {
    throw new Exception("Missing db config environment DB_TYPE, DB_USER, DB_PASS, DB_HOST, DB_NAME, DB_TABLE_PREFIX")
}

if ($db_table_prefix === false) {
    $db_table_prefix = '';
}

define('DB_TYPE', $db_type);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);
define('DB_HOST', $db_host);
define('DB_NAME', $db_name);
define('DB_TABLE_PREFIX', $db_table_prefix);
