<?php
/**
 * Created by PhpStorm.
 * User: 0917852
 * Date: 15/03/2016
 * Time: 18:29
 */

define('DB_SERVER', 'your-azure-server');
define('DB_USERNAME', 'your-username');
define('DB_PASSWORD', 'your-password');
define('DB_DATABASE', 'your-database');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>