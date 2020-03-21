<?php
//Setup file

//Constants
define('D_TEMPLATE', 'template');
define('ROOT_DIR', '__DIR__/../');


//Functions
include_once(ROOT_DIR.'functions/data.php');
include_once(ROOT_DIR.'functions/template.php');

//Database connection
$dbc = mysqli_connect('localhost', 'maximsa', '12password', 'atomcms') OR die('Could not connect because: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');


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