<?php
//Setup file

//Constants
define('D_TEMPLATE', 'template');
define('ROOT_DIR', '__DIR__/../');


//Functions
include_once(ROOT_DIR.'functions/data.php');
include_once(ROOT_DIR.'functions/template.php');

//Database connection
$dbc = new mysqli('localhost','maximsa','12password', 'atomcms');
$dbc->set_charset('utf8');
if($dbc->connect_error){
    die('Could not connect because: '. $dbc->connect_error);
}


// Site Setup
$debug = data_setting_value('Debug-Status', $dbc);


$site_title = 'Atom CMS';

if(isset($_GET['page'])){ // If value is given in the URL
	$pageid = $_GET['page']; // Set $pageid = the value given in the URL
} else {
	$pageid = 1; // Set $pageid = 1 or the Home Page
}


//Page Setup
$page = data_page($pageid, $dbc);

?>