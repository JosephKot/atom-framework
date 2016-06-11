<?php
// Setup File:

// Database connection --------------------------------------->>>

// to avoid having to type out the connection every time that we make a query, we store the connection script in the $dbc variable and use it freely throughout the site.

$dbc = mysqli_connect('localhost', 'AdminTemp', 'password1', 'codemodecms') OR die('Could not connect because: '.mysqli_connect_error()); // adding the die function kills the page and no other content loads

$site_title = 'CODEMODE.CA';
$page_title = 'Home';

// The Pages Query -------------------------------------------->>>

// Select all from pages table, where id is 1, then store the query in the $q variable
$q = "SELECT * FROM pages where id = 1";

//store the result in the $r variable. Provide the database link, followed by the query ($dbc, $q)
$r = mysqli_query($dbc, $q);

// use mysqli_fetch_assoc function on the result $r to convert it into an associative array, then store it in the $page variable
$page = mysqli_fetch_assoc($r);
// we can then call $page anywhere in index.php and display its data
// echo $page['title']; 


?>