<?php

//Database connection
$dbc = new mysqli('localhost','maximsa','12password', 'atomcms');
$dbc->set_charset('utf8');
if($dbc->connect_error){
    die('Could not connect because: '. $dbc->connect_error);
}

//Constants
define('D_TEMPLATE', 'template');
define('ROOT_DIR', '__DIR__/../');
?>