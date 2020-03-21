<?php

//database connection
$dbc = mysqli_connect('localhost', 'maximsa', '12password', 'atomcms') OR die('Could not connect because: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');


//Constants
define('D_TEMPLATE', 'template');
define('ROOT_DIR', '__DIR__/../');
?>