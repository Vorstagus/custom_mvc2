<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
define('BASEPATH',dirname(__FILE__));
include "../system/Loader.php";
$init = new Routes;
 

?>