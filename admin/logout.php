<?php

//Start Session
session_start();

unset($_SESSION['username']); // Username key delete

//session_destroy(); // Delete all session keys

header('location:login.php');

?>