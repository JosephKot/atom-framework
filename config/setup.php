<?php
// Setup File:

// Database connection --------------------------------------->>>

// to avoid having to type out the connection every time that we make a query, we store the connection script in the $dbc variable and use it freely throughout the site.

$dbc = mysqli_connect('localhost', 'AdminTemp', 'password1', 'codemodecms') OR die('Could not connect because: '.mysqli_connect_error()); // adding the die function kills the page and no other content loads

$site_title = 'CODEMODE.CA';
$page_title = 'Home';

if(isset($_GET['page'])) { // if the url in the browser is set to ?page=xxx then...

	$page_id = $_GET['page']; // get the value of ?page= and store it in a varible. Add that variable to the pages query below. Replage id = $_GET[page] with id = $page_id. If $page_id is set, then it will redirect to that page, otherwise...

} else {

	$page_id = 1; // it will go to page 1 - the home page. Doesn't matter what you type after the url, it's going to take you to the front page.

}

// The Pages Query -------------------------------------------->>>

// Select all from pages table, where id is 1, then store the query in the $q variable
$q = "SELECT * FROM pages where id = $page_id";

//store the result in the $r variable. Provide the database link, followed by the query ($dbc, $q)
$r = mysqli_query($dbc, $q);

// use mysqli_fetch_assoc function on the result $r to convert it into an associative array, then store it in the $page variable
$page = mysqli_fetch_assoc($r);
// we can then call $page anywhere in index.php and display its data
// echo $page['title']; 


?>