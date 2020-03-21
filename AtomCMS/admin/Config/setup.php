<?php
//Setup file

//Database connection
include_once('Config/connection.php');

//Functions
include_once(ROOT_DIR.'functions/data.php');
include_once(ROOT_DIR.'functions/template.php');


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