<?php
// Setup File:

# Database connection...

$dbc = mysqli_connect('localhost', 'AdminTemp', 'password1', 'codemodecms') OR die('Could not connect because: '.mysqli_connect_error()); // adding the die function kills the page and no other content loads

$site_title = 'CODEMODE.CA';
$page_title = 'Home';

?>